@extends("front.master.master")
@section("title","İşlem")
@section("content")

<div class="card">
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Fatura No</th>
                    <th>Müşteri</th>
                    <th>İşlem Tipi</th>
                    <th>Fiyat</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
@section("footer")


<script src="{{asset("/")}}plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset("/")}}plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset("/")}}plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset("/")}}plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset("/")}}plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset("/")}}plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset("/")}}plugins/jszip/jszip.min.js"></script>
<script src="{{asset("/")}}plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset("/")}}plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset("/")}}plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset("/")}}plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset("/")}}plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
                "serverSide": true,
                ajax: {
                    type: 'POST',
                    headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
                    url: '{{route('islem.data')}}',
                    data: function (d) {
                    }
                },
                columns: [
                    {data: 'faturaNo', name: 'faturaNo'},
                    {data: 'musteri', name: 'musteri'},
                    {data: 'tip', name: 'tip'},
                    {data: 'fiyat', name: 'fiyat'},
                    {data: 'edit', name: 'edit', orderable: false, searchable: false},
                    {data: 'delete', name: 'delete', orderable: false, searchable: false},
                ]
            }).buttons().container().appendTo('#example1_wrapper .col-md-12:eq(0)');
        });
</script>
@endsection