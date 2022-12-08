<!-- BEGIN: main -->
<div class="page">
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="import_file">
        <input type="submit" name="save" value="Save" class="btn btn-success waves-effect waves-light">
    </form>
    <!-- BEGIN: readdata -->
        <div>
            <table class="table">
                <tr>
                    <td>{DATAREAD.stt}</td>
                    <td>{DATAREAD.title}</td>
                    <td>{DATAREAD.addtime}</td>
                </tr>
            </table>
        </div>

    <!-- END: readdata -->
    <!-- BEGIN: error -->
        <p>{ERROR}</p>
    <!-- END: error -->
    {NV_BASE_SITEURL}
</div>
<!-- END: main -->