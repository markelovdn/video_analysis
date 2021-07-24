<!DOCTYPE html>
<html lang="en" dir="ltr" class="">
<head>
    <meta charset="UTF-8">
    <title>Video analysis</title>
    <script type="text/javascript" src="stopwatch-with-lap.js"></script>
    <link rel="stylesheet" href="style.css">
    <?php
    $video_code_str_pos = strpos($_POST['src_video'], '=') + 1;
    $video_code = substr($_POST['src_video'], $video_code_str_pos);
    ?>
</head>
<body onload='stopwatch();'>
    <div class="stopwatch">
        <input type='text' id='disp' maxlength=12 readonly>
        <button type='button' onclick='ss()' id='butt'>Start/Stop</button>
        <button type='button' onclick='r()' id='butt2'>Reset</button>
        <button type='button' onclick='clr()' id='butt3'>Clear</button>
        <table border=1>
            <tr>
                <th width=65>Lap #</th>
                <th width=112>Running Total</th>
                <th width=112>This Lap</th>
            </tr>
            <tr>
                <td colspan=3>
                    <div align=center id='lap'>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="video">

        <iframe width="1124" height="568" src="https://www.youtube.com/embed/<?= $video_code ?>" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        <form method="post">
            <input type="text" name="src_video" id="video">
            <input type="submit" id="btn_send_video">
        </form>
    </div>

</body>
</html>