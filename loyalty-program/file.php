<style type="text/css">
    #progress-wrp {
        border: 1px solid #0099CC;
        padding: 1px;
        position: relative;
        border-radius: 3px;
        margin: 10px;
        text-align: left;
        background: #fff;
        box-shadow: inset 1px 3px 6px rgba(0, 0, 0, 0.12);
    }
    #progress-wrp .progress-bar{
        height: 20px;
        border-radius: 3px;
        background-color: #f39ac7;
        width: 0;
        box-shadow: inset 1px 1px 10px rgba(0, 0, 0, 0.11);
    }
    #progress-wrp .status{
        top:3px;
        left:50%;
        position:absolute;
        display:inline-block;
        color: #000000;
    }
</style>
<script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
<div class="form-wrap">
    <h3>Ajax Image Uploader</h3>
    <form action="process.php" method="post" enctype="multipart/form-data" id="upload_form">
        <input name="__files[]" type="file" multiple />
        <input name="__submit__" type="submit" value="Upload"/>
    </form>
    <div id="progress-wrp"><div class="progress-bar"></div ><div class="status">0%</div></div>
    <div id="output"><!-- error or success results --></div>
</div>
<script type="text/javascript">
</script>