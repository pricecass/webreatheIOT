<!DOCTYPE html>
<html>
<head>
    <title>webreathe</title>

    <style type="text/css">
        table { vertical-align: top; }
        tr    { vertical-align: top; }
        td    { vertical-align: top; }

        body {
            color:black;
            background-color:white;
            font-size: 12px;
            font-family: 'Lato', Calibri, Arial, sans-serif;
        }

    </style>
</head>

<body>

<div style="text-align: center">
    <p><span style="font-weight: bold;">Etat de fonctionnement des modules</span> <br>Date: {{  date('d-m-Y H:i:s') }}</p>
</div>

<div>
    <table style="border: 1px solid black; padding: 5px">
        @foreach($modules as $module)
        <tr><td style="font-weight: bold;">{{ $module->module_name }}</td></tr>
        <tr>
            <td style="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, at blanditiis commodi dicta distinctio dolor doloribus earum eos illo illum ipsa neque, odio omnis quasi quidem repellat temporibus unde veritatis.</p>
            </td>
            <td>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consectetur dolorem dolorum in incidunt itaque magni nemo nihil omnis voluptate? Deleniti incidunt neque nulla perspiciatis quae quasi similique tempore tenetur!</p>
            </td>
        </tr>
        @endforeach
    </table>

</div>

</body>
</html>