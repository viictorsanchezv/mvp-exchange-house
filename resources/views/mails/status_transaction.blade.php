<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title></title>
</head>
<body>
 
        <div class="flex flex-wrap" style="background: #f1f1f1; padding: 40px;">
            <div class="w-full sm:max-w-md overflow-hidden sm:rounded-lg">
                <img src="{{ asset('images/tailwind-css-logo.svg') }}" class="h-20 mx-auto">
            </div>
            <div>
                
                <table class="m_-7961018783826041780inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;background-color:#ffffff;border-color:#e8e5ef;border-radius:2px;border-width:1px;margin:0 auto;padding:0;width:570px; border: 1px solid #dddddd;">

                    <tbody>
                        <tr>
                            <td style="box-sizing:border-box;max-width:100vw;padding:32px">
                                <h1 style="border-bottom: 1px solid #e8e5ef; box-sizing:border-box;color:#3d4852;font-size:18px;font-weight:bold;margin-top:0;text-align:center">Resumen de la transacción</h1>
                                <table align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;margin:30px auto;padding:0;text-align:center;width:100%; ">
                                    <tbody>
                                        <tr>
                                            <td align="center" style="box-sizing:border-box;">
                                                <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box; margin-top:40;  border-bottom: 1px solid #dddddd;">
                                                    <tbody>
                                                        <tr>
                                                            <td align="center" style="text-aling:left; box-sizing:border-box;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box; margin-top:40; margin-bottom: 10px;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="text-aling:left; box-sizing:border-box; color:#3d4852;font-size:15px;"> <strong> Envia:</strong> {{ $infoTransaction[0] }}  </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td align="center" style="text-aling:left; box-sizing:border-box;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;  margin-bottom: 10px;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="text-aling:left; box-sizing:border-box; color:#3d4852;font-size:15px; ">  <strong>  País: </strong>  {{ $infoTransaction[2] }}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="text-aling:left; box-sizing:border-box;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;   margin-bottom: 10px;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="text-aling:left; box-sizing:border-box; color:#3d4852;font-size:15px;"> <strong> Recibe:</strong> {{ $infoTransaction[3] }}  </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td align="center" style="text-aling:left; box-sizing:border-box;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;  margin-bottom: 10px;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="text-aling:left; box-sizing:border-box; color:#3d4852;font-size:15px; ">  <strong>  País: </strong>  {{ $infoTransaction[5] }}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                                <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box; border-bottom: 1px solid #dddddd;">
                                                    <tbody>
                                                        <tr>
                                                            <td align="center" style="text-aling:left; box-sizing:border-box;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box; margin-top:40px;  margin-bottom: 10px;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="text-aling:left; box-sizing:border-box; color:#3d4852;font-size:15px;  "> <strong> Tipo de cambio</strong> </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="text-aling:left; box-sizing:border-box;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;  margin-bottom: 10px;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="text-aling:left; box-sizing:border-box; color:#3d4852;font-size:15px;  "> 1.00 USD = {{ $infoTransaction[8] }} COP  </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                                <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;  border-bottom: 1px solid #dddddd;">
                                                    <tbody>
                                                        <tr style="margin-top:40;">
                                                            <td align="center" style="text-aling:left; box-sizing:border-box;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box; margin-top:40px;  margin-bottom: 10px;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="text-aling:left; box-sizing:border-box; color:#3d4852;font-size:15px;"> <strong> Importe de transferencia:</strong> {{ $infoTransaction[6] }} USD </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="text-aling:left; box-sizing:border-box;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;  margin-bottom: 10px;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="text-aling:left; box-sizing:border-box; color:#3d4852;font-size:15px;"> <strong> Tarifa de la transferencia:</strong> {{ $infoTransaction[6]*0.07 }} USD </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="text-aling:left; box-sizing:border-box;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;  margin-bottom: 10px;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="text-aling:left; box-sizing:border-box; color:#3d4852;font-size:15px;"> <strong> Total de la transferencia:</strong> {{ ($infoTransaction[6]*0.07)+$infoTransaction[6] }} USD </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box; border-bottom: 1px solid #dddddd;">
                                                    <tbody>
                                                        <tr>
                                                            <td align="center" style="text-aling:left; box-sizing:border-box;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box; margin-top:40px;  margin-bottom: 10px;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="text-aling:left; box-sizing:border-box; color:#3d4852;font-size:15px;  "> <strong> Total destinario recibe:</strong> {{ ($infoTransaction[6])*3800 }} COP  </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                                <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box; ">
                                                    <tbody>
                                                        <tr>
                                                            <td align="center" style="text-aling:left; box-sizing:border-box;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box; margin-top:40px;  margin-bottom: 10px;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="text-aling:left; box-sizing:border-box; color:#3d4852;font-size:15px;  "> <strong> Estado de la transacción:</strong> {{ $infoTransaction[7] }} </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="text-aling:left; box-sizing:border-box;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;   margin-bottom: 10px;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="text-aling:left; box-sizing:border-box; color:#3d4852;font-size:15px;  "> <strong> Fecha:</strong> {{ $infoTransaction[9] }} </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h3 style=" box-sizing:border-box;color:#3d4852;font-size:16px;font-weight:bold;margin-top:0;text-align:center">Gracias por confiar en nosotros!!</h3>
            </div>
        </div>
</body>
</html>