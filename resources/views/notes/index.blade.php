@extends('layout/template')

@section('content')
<h1 class="text-center ">Notes list</h1>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8" id="table_data">
</div>


@endsection

@section('scripts')
    <script>

        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            const page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        async function fetch_data(page)
        {
            $.ajax({
                url:"/api/notes?page="+page,
                success:function(data)
                {
                    $('#table_data').html(data);
                }
            });
        }

        (function() {
            fetch_data(1)
        })();
    </script>
@endsection

