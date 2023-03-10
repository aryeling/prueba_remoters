<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.2.2/dist/lumen/bootstrap.min.css" rel="stylesheet">
         <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12 text-end">
                    <a href="/" class="btn btn-link btn-sm">Actividades</a>
                </div>
            </div>



            @if(!empty($activities_booking) && $activities_booking->count() > 0)
                <div class="row" id="listActivity">
                    <div class="col-md-12 table-responsive">
                        <legend>Lista de Reservaciones</legend>
                        <table class="table table-hover table-striped table-sm">
                            <thead class="table-success text-center">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Actividad</th>
                                    <th scope="col">Fecha Reservada</th>
                                    <th scope="col">Cant. Personas</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Fecha compra</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($activities_booking as $activity_booking )
                                    <tr class="bg-gray-100 border-b">
                                        <td>{{ $activity_booking->id }}</td>
                                        <td>{{ $activity_booking->activity->title }}</td>
                                        <td class="text-center">{{ \Carbon\Carbon::parse($activity_booking->activity_booking_date)->format('d-m-Y')}}</td>
                                        <td class="text-end">{{ $activity_booking->person_quantity }}</td>
                                        <td class="text-end">{{ number_format($activity_booking->activity->price_person * $activity_booking->person_quantity, 2, ',', '.') }}</td>

                                        <td class="text-center">{{ \Carbon\Carbon::parse($activity_booking->created_at)->format('d-m-Y')  }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $activities_booking->links() }}
                </div>

            @else
                <div class="row" id="listActivity">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            No se encontraron resultados
                        </div>
                    </div>
                </div>
            @endif

        </div>

        <div class="modal fade" id="exampleModal">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" style="display: flex">
                    <div>Actividad</div>&nbsp;
                    <div id="title" ></div>

                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
                </div>
                <div class="modal-body">
                    <div style="display: flex">
                        <div><strong>Nombre:</strong></div>&nbsp;
                        <div id="name" ></div>
                    </div>
                    <div style="display: flex">
                        <div><strong>Descripci??n:</strong></div>&nbsp;
                        <div id="description" ></div>
                    </div>
                    <div style="display: flex">
                        <div><strong>Cantidad de personas:</strong></div>&nbsp;
                        <div id="qty_people2"></div>
                    </div>
                    <div style="display: flex">
                        <div><strong>Precio total a abonar:</strong></div>&nbsp;
                        <div id="total_price" ></div>
                    </div>
                    <div style="display: flex">
                        <div><strong>Actividades relacionadas:</strong></div>&nbsp;
                        <div id="relation_activities" ></div>
                    </div>
                </div>
                <div class="modal-footer">

                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
                </div>
            </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"
            integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
            integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
        </script>

        <script type="text/javascript">
            function showActivity(id){
                $.ajax({
                    type:"POST",
                    url: "{{ route('activities.show') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",id: id },
                    dataType: 'json',
                    success: function(res){
                        let total_price = res.data.activity.price_person * res.data.activity.max_quantity_people;
                        $('#name').text(res.data.activity.title);
                        $('#description').text(res.data.activity.description);
                        $('#qty_people2').text(parseInt(res.data.activity.max_quantity_people));
                        $('#total_price').text(total_price.toLocaleString('es-VE') );
                        let msg = "";
                        for (let index = 0; index < res.data.listActivities.length; index++) {
                            let element = res.data.listActivities[index];
                            msg += "\n"+element.title;
                        }
                        $('#relation_activities').text((msg) ? msg : 'Ninguna');
                    }
                });
            }
        </script>
    </body>
</html>
