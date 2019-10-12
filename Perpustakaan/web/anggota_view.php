<table class="table table-hover table-striped" id="table-anggota">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

    <tbody>
</table>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" onclick="create()">
    Create
</button>

<!-- Modal -->
<div class="modal fade" id="anggota-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" id="anggota-form">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Nama">
                        </div>
                    </div>                    
                    <fieldset class="form-group">
                        <div class="row">
                            <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
                                    <label class="form-check-label">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                                    <label class="form-check-label">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggal_lahir">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                        </div>
                    </div> 
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="save()" id="btn-save">Save</button>
                <button type="button" class="btn btn-primary" onclick="" id="btn-update">Update</button>
            </div>
        </div>
    </div>
</div>

<script>
    var table;
    $(function () {
        table = $('#table-anggota').DataTable({
            ajax: 'api.php?action=view',
            columns: [
                {data: 'no'},
                {data: 'nama'},
                {data: 'jenis_kelamin'},
                {data: 'tempat_lahir'},
                {data: 'tanggal_lahir'},
                {data: 'alamat'},
                {data: 'action'}
            ]
        });
    });

    function create() {
        $('#anggota-form')[0].reset();
        $('#btn-save').show();
        $('#btn-update').hide();
        $('#anggota-modal').modal('show');
    }

    function save() {
        var data = $('#anggota-form').serializeArray();
        $.post('api.php?action=store', data)
                .done(function (response) {
                    if (response.status_code == 1) {
                        $('#anggota-modal').modal('hide');
                        table.ajax.reload();
                    } else {
                        alert(response.message);
                    }
                });
    }

    function edit(id) {
        $('#anggota-form')[0].reset();
        $.get('api.php?action=edit&id=' + id)
                .done(function (response) {
                    if (response.status_code == 1) {
                        $('[name="name"]').val(response.data.name);
                        $('[name="jenis_kelamin"]').val([response.data.jenis_kelamin]);
                        $('[name="tempat_lahir"]').val(response.data.tempat_lahir);
                        $('[name="tanggal_lahir"]').val(response.data.tanggal_lahir);
                        $('[name="alamat"]').val(response.data.alamat);

                        $('#btn-save').hide();
                        $('#btn-update').attr('onclick', 'update(' + response.data.id + ')');
                        $('#btn-update').show();
                        $('#anggota-modal').modal('show');
                    } else {
                        alert(response.message);
                    }
                });
    }

    function update(id) {
        var data = $('#anggota-form').serializeArray();
        $.post('api.php?action=update&id=' + id, data)
                .done(function (response) {
                    if (response.status_code == 1) {
                        $('#anggota-modal').modal('hide');
                        table.ajax.reload();
                    } else {
                        alert(response.message);
                    }
                });
    }

    function remove(id) {
        if (confirm('Are you sure delete this data?')) {
            $.get('api.php?action=delete&id=' + id)
                    .done(function (response) {
                        if (response.status_code == 1) {
                            table.ajax.reload();
                        } else {
                            alert(data.message);
                        }
                    });
        }
    }
</script>