<!DOCTYPE html>
<html>
<head>
    <link href="/public/css/bootstrap5-2-0.min.css"></head>
<body>
    <div class="container">
        <div>
            <img src="https://erc.hiconix.ru/img/logo_cab_standart.png" alt="" width="200px">
        </div>
        <div align="right">
            <div align="right">
                <span style="font-weight: bold;">Ваше имя:</span> <span>{{$data['client']['name']}}</span>
            </div>
            <div align="right">
                <span style="font-weight: bold;">Компания:</span> <span>{{$data['client']['company']}}</span>
            </div>
            <div align="right">
                <span style="font-weight: bold;">E-mail:</span> <span>{{$data['client']['email']}}</span>
            </div>
            <div align="right">
                <span style="font-weight: bold;">Телефон:</span> <span>{{$data['client']['phone']}}</span>
            </div>
        </div>
        <div class="mt-5">
            <h1 class="text-center" style="font-size: 20px; font-weight: bold;">Коммерческое предложение</h1>
        </div>
        <div>
            <table class="table table-bordered" style="border: 1px solid black;">
                <thead style="border: 1px solid black;">
                    <tr style="border: 1px solid black;">
                        <th  style="border: 1px solid black;"></th>
                        <th  style="border: 1px solid black;">Артикул</th>
                        <th  style="border: 1px solid black;">Наименование</th>
                        <th  style="border: 1px solid black;">Кол-во</th>
                        <th  style="border: 1px solid black;">Цена (РИЦ), руб</th>
                        @if(isset($data['products'][0]['price_opt']))
                        <th  style="border: 1px solid black;">Цена (Диллерская), руб</th>
                        @endif
                        <th  style="border: 1px solid black;">Сумма (РИЦ), руб</th>
                        @if(isset($data['products'][0]['summ_opt']))
                        <th  style="border: 1px solid black;">Сумма (Диллерская), руб</th>
                        @endif
                    </tr>
                </thead>
                <tbody style="border: 1px solid black;">
                    @foreach ($data['products'] as $index => $product)
                        <tr style="border: 1px solid black;">
                            <td  style="border: 1px solid black;">{{$index+1}}</td>
                            <td  style="border: 1px solid black;">{{$product['article']}}</td>
                            <td  style="border: 1px solid black;">{{$product['name']}}</td>
                            <td  style="border: 1px solid black;">{{$product['quantity']}}</td>
                            <td  style="border: 1px solid black;">
                                @if (isset($product['text_price']))
                                    {!!$product['text_price']!!}
                                @else
                                    {{number_format($product['price_ric'], 0, " ", " ")}} 
                                @endif
                            </td>
                            @if(isset($product['price_opt']))
                            <td  style="border: 1px solid black;">{{number_format($product['price_opt'], 0, " ", " ")}}</td>
                            @endif
                            <td  style="border: 1px solid black;">
                                @if (isset($product['text_price']))
                                    {!!$product['text_price']!!}
                                @else
                                    {{number_format($product['summ_ric'], 0, " ", " ")}}
                                @endif
                            </td>
                            @if(isset($product['summ_opt']))
                            <td  style="border: 1px solid black;">{{number_format($product['summ_opt'], 0, " ", " ")}}</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                <p>
                    <span style="font-weight: bold;">ИТОГО (РИЦ):</span> <span>{{$data['total']['ric']}} руб.</span>
                </p>
                @if ($data['total']['opt'] != "0")
                <p>
                    <strong style="font-weight: bold;">ИТОГО (Диллерская):</strong> <span>{{$data['total']['opt']}} руб.</span>
                </p>
                @endif
                @if (!isset($data['manager']))
                <p>
                    <strong style="font-weight: bold;">ИТОГО (Диллерская):</strong> <span style="color: red;">Чтобы узнать диллерскую цену - свяжитесь с нашими менеджерами или введите его код</span>
                </p>
                @endif
            </div>
            @if (isset($data['manager']))
                <div align="right" style="margin-top: 50px;">
                    <div align="right">
                        <span style="font-weight: bold;">Менеджер ООО "Хиконикс":</span> <span>{{$data['manager']['name']}}</span>
                    </div>
                    <div align="right">
                        <span style="font-weight: bold;">Телефон:</span>+7 (495) 777-23-66</span>
                    </div>
                </div>
            @else
            <div align="right">
                <strong>ООО "Хиконикс"</strong> - федеральный оптовый дистрибьютор <br>
                Владелец прав на бренды в России и странах СНГ: AUX, Ecoclima, Electrolux <br>
                +7(495) 777-23-66
            </div>
            @endif
        </div>
    </div>
</body>
</html>