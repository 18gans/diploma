@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Анализ</div>

                    <div class="card-body">

                        <h2>Әлем бойынша жер сілкіністері жайлы анализ</h2>

                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                    src="https://app.powerbi.com/reportEmbed?reportId=a459942e-b213-47ae-94ed-4534159d3d09&autoAuth=true&ctid=70c1157a-941c-4b39-98e6-a0634f2759e7&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLXdlc3QtZXVyb3BlLWQtcHJpbWFyeS1yZWRpcmVjdC5hbmFseXNpcy53aW5kb3dzLm5ldC8ifQ%3D%3D"
                                    frameborder="0" allowFullScreen="true"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
