@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
{{-- Вернуться к выбору --}}
<div class="container mt-5">
    <h1>Корзина</h1>
    <div id="cartContent">
        <div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th>Код товара</th>
                        <th>Наименование</th>
                        <th>Кол-во</th>
                        <th>Цена</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="cartBody">
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="fw-bold">Итого (РИЦ):</td>
                        <td><span id="summTotal"></span></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <span style="color: red;">Чтобы узнать диллерскую цену - свяжитесь с нашими менеджерами или введите его код</span>
        <div class="row mb-5" id="form">
            <h5>Заполните контактные данные</h5>
            <div class="col-12 col-md-3">
                <div class="mb-3">
                    <label class="required">Ваше имя</label>
                    <input type="text" id="name" class="form-control" placeholder="Имя">
                </div>
                <div class="mb-3">
                    <label class="required">Компания</label>
                    <input type="text" id="company" class="form-control" placeholder="ООО «Хиконикс»‎">
                </div>

            </div>
            <div class="col-1 col-md-1"></div>
            <div class="col-12 col-md-3">
                <div class="mb-3">
                    <label class="required">E-mail</label>
                    <input type="email" id="email" class="form-control" placeholder="site@domain.ru">
                </div>
                <div class="mb-3">
                    <label class="required">Телефон</label>
                    <input type="tel" id="phone" class="form-control phone-input-mask" placeholder="+7 (999) 999-99-99">
                </div>
            </div>
			 <div class="col-1 col-md-3"></div>
			 <div class="col-12 col-md-3">
                <div class="mb-3">
                    <label>Менеджер</label>
                    <input type="number" id="managerNumber" class="form-control" placeholder="___">
                    <label class="text-muted" style="font-size: 12px;">Введите код   менеджера</label>
                </div>
                <div>
                    <button class="in-cart w-100 p-2" id="sendCart">Отправить</button>
                    <span class="text-muted mt-2" style="font-size: 10px; line-height: 1.5; display:block; text-align: center;">
                        Нажимая на кнопку вы соглашаетесь на обработку персональных данных в соответствии с <a href="/privacy-policy">политикой конфиденциальности</a>
                    </span>
                </div>			
			</div>
			
        </div>
    </div>
</div>
<script type="text/javascript">
window.addEventListener('load', () => {
    const cartBody = document.querySelector('#cartBody');
    const cartFullContent = document.querySelector('#cartContent');
    const sendCartBtn = document.querySelector('#sendCart');
    const form = document.querySelector('#form');
    const manageNumberInput = form.querySelector('#managerNumber');
    const summTotalNode = document.querySelector("#summTotal");

    const ru = new Intl.NumberFormat("ru", {style: "decimal"});

    const renderSumm = (summTotal) => {
        summTotalNode.innerText = ru.format(summTotal) + " руб.";
    }

    const getCart = () => {
        return JSON.parse(localStorage.getItem('cart'));
    }

    const getProductInfo = async (id) => {
        const response = await fetch(`/api/products/${id}`);
        return await response.json();
    }

    const getForm = () => {
        const formData = {
            name: form.querySelector('#name').value,
            company: form.querySelector('#company').value,
            email: form.querySelector('#email').value,
            phone: form.querySelector('#phone').value,
            manageNumber: form.querySelector('#managerNumber').value,
            cart: JSON.parse(localStorage.getItem('cart'))
        };

        return formData;
    }

    const sendCart = async (data) => {
        let res = await fetch('/api/cart/send', {method: "POST", body: JSON.stringify(data)});
        return await res.json();
    }

    sendCartBtn.onclick = async () => {
        const formInputs = [
            form.querySelector('#name'),
            form.querySelector('#company'),
            form.querySelector('#email'),
            form.querySelector('#phone'),
        ];

        let canSend = [];

        formInputs.forEach(input => {
            if (input.value.length < 4) {
                input.style.border = "1px solid red";
                canSend.push(false)
            } else {
                input.style.border = "1px solid #12aaed";
                canSend.push(true)
            }
        })
        if (canSend.indexOf(false) === -1) {
            await sendCart(getForm()).then((json) => {
                let link = document.createElement('a');
                link.target = "_blank";
                link.href = `http://u1501272.isp.regruhosting.ru/${json.path}`;
                document.body.appendChild(link);
                link.click();
                fullClearCart();
                let html = "Спасибо! Ваша заявка отправлена";
                renderCart(html);
            });
        }
    }

    const updateCart = (id, newQuantity) => {
        const cart = JSON.parse(localStorage.getItem('cart'));

        if (newQuantity == 0) {
            delete(cart[id]);
        } else {
            cart[id] = newQuantity;
        }
        localStorage.setItem('cart',JSON.stringify(cart));
    }

    const renderCart = async (html = null) => {
        const cart = getCart();

        if (Object.keys(cart).length == 0) {
            return cartFullContent.innerHTML = `
                <div class="px-4 py-5 my-5 text-center">
                    <h2 class="fw-bold text-muted">${html ? html : "Корзина пуста"}</h2>
                    <a href="#" id="catalogOpenBtn">За покупками <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            `;
        }

        let i = 0;
        let summTotal = 0;

        Object.keys(cart).forEach(async (cartElem) => {
            const cartProductID = cartElem;
            const cartProductQuantity = cart[cartElem];
            
            let productInfo = null;

            await getProductInfo(cartProductID).then((data) => {
                productInfo = data;
            })
            i++;
            const cartProductNode = document.createElement('tr');
            cartProductNode.innerHTML = `
                <td>${i}</td>
                <td>${productInfo.article ? productInfo.article : "-"}</td>
                <td>${productInfo.fullTitle}</td>
                <td>
                    <button id="minusBtn">-</button>
                    <span id="quantity">${cartProductQuantity}</span>
                    <button id="plusBtn">+</button>
                </td>
                <td>
                    ${productInfo.textPrice ?
                        productInfo.textPrice
                        : `<span id="price">${ru.format(productInfo.ric_current * cartProductQuantity)}</span> руб.`}
                   
                </td>
                <td>
                    <span id="deleteButton" style="cursor: pointer;">&times;</span>    
                </td>
            `;
            const minusBtn = cartProductNode.querySelector('#minusBtn');
            const plusBtn = cartProductNode.querySelector('#plusBtn');
            const quantity = cartProductNode.querySelector('#quantity');
            const price = cartProductNode.querySelector("#price");
            const deleteButton = cartProductNode.querySelector('#deleteButton');

            if (price) {
                summTotal += parseInt(quantity.innerText) * productInfo.ric_current;
            }

            plusBtn.onclick = () => {
                let productQuantity = parseInt(quantity.innerText);
                let newQuantity = productQuantity+1;
                
                if (price) {
                    console.log(productInfo);
                    summTotal += parseInt(productInfo.ric_current);
                    renderSumm(summTotal);
                    price.innerText = ru.format(productInfo.ric_current * newQuantity);
                }
                
                updateCart(cartElem,newQuantity)
                quantity.innerText = newQuantity;
            }

            minusBtn.onclick = () => {
                let productQuantity = parseInt(quantity.innerText);
                let newQuantity = productQuantity-1;

                if (newQuantity > 0) {
                    if (price) {
                        price.innerText = ru.format(productInfo.ric_current * newQuantity);
                    }
                    quantity.innerText = newQuantity;
                }
                if (newQuantity === 0) {
                    cartProductNode.remove();
                }
                if (price) {
                    summTotal -= productInfo.ric_current;
                    renderSumm(summTotal);
                }
                
                updateCart(cartElem,newQuantity)
            }

            deleteButton.onclick = () => {
                if (price) {
                    summTotal -= productInfo.ric_current * parseInt(quantity.innerText);
                    renderSumm(summTotal);
                }
                
                updateCart(cartElem, 0)
                cartProductNode.remove();
            }

            if (price) {
                renderSumm(summTotal);
            }
            cartBody.appendChild(cartProductNode);
        });
    }

    const manageNumberInputHandler = (e) => {
        e.target.value = e.target.value.substr(0,3);
    }

    const init = () => {
        renderCart();
        manageNumberInput.addEventListener('input', manageNumberInputHandler);
    }

    init();
});
</script>
@endsection