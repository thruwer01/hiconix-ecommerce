@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item active">Серии</li>
        </ol>
    </nav>
</div>
<div class="container mt-2">
    <h1 id="h1">{{$title}} <span></span></h1>
    <div class="row">
        <div class="col-md-12 mb-3" style="max-width: 200px">
            <select class="form-control" id="selectBrand">
                <option disabled selected>Выберите бренд</option>
                <option value="aux">AUX</option>
                <option value="ecoclima">Ecoclima</option>
                <option value="electrolux">Electrolux</option>
                <option value="climaveneta">CLIMAVENETA</option>
            </select>
        </div>
        <div class="col-md-12">
            @foreach ($series as $serie)
                <div class="mb-3" id="series" data-series-brand="{!!strtolower($serie->brand->name)!!}">
                    <div class="p-4 border">
                        <div>
                            <a class="fw-bold color-main" href="{{$serie->link}}">{{$serie->h1_content}}</a>
                        </div>
                        <div class="text-muted mt-3">
                            {!!mb_substr(strip_tags($serie->html_description), 0, 300)!!}..
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection()
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', () => {
    const allSeries = document.querySelectorAll('#series');
    const brandSelector = document.querySelector('#selectBrand');
    const h1 = document.querySelector('#h1 span');
    
    const clearAllSeries = () => {
        allSeries.forEach(series => {
            series.style.display = 'none';
        });
    }

    const renderBrandSeries = (brand) => {
        allSeries.forEach(series => {
            if(series.dataset.seriesBrand === brand) {
                series.style.display = 'block';
            }
        })
    }

    brandSelector.onchange = (e) => {
        let newBrand = e.target.value;
        let brand = e.target.selectedOptions[0].innerText;
        h1.innerText = `бренда ${brand}`;

        clearAllSeries();
        renderBrandSeries(newBrand);
    }    

});

</script>