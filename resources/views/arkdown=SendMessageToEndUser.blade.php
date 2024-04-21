{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Email Template</title>--}}
{{--    <style>--}}
{{--        table {--}}
{{--            width: 100%;--}}
{{--            border-collapse: collapse;--}}
{{--        }--}}
{{--        th, td {--}}
{{--            border: 1px solid #ddd;--}}
{{--            padding: 8px;--}}
{{--            text-align: left;--}}
{{--        }--}}
{{--        th {--}}
{{--            background-color: #f2f2f2;--}}
{{--        }--}}
{{--        .button {--}}
{{--            display: block;--}}
{{--            width: 200px;--}}
{{--            padding: 10px;--}}
{{--            text-align: center;--}}
{{--            background-color: #4CAF50;--}}
{{--            color: white;--}}
{{--            text-decoration: none;--}}
{{--            border-radius: 5px;--}}
{{--            margin: 20px auto;--}}
{{--            top: 50%;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}

{{--<div class="card border-success mb-3" style="max-width: 18rem;">--}}
{{--    <div class="card-header bg-transparent border-success">Hello {{ $name }}</div>--}}
{{--    <div class="card-body text-success">--}}
{{--        <h5 class="card-title">{{ $senderMessage }}</h5>--}}

{{--    </div>--}}
{{--    <div class="card-footer bg-transparent border-success">Footer</div>--}}
{{--</div>--}}




{{--<table>--}}
{{--    <tr>--}}
{{--        <th >Name</th>--}}
{{--        <th>Email</th>--}}
{{--        <th>Subject</th>--}}
{{--        <th>Message</th>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <td>{{ $name }}</td>--}}
{{--        <td>{{ $mailData['email'] ?? 'N/A' }}</td>--}}
{{--        <td>{{ $mailData['subject'] ?? 'N/A' }}</td>--}}
{{--        <td>{{ $mailData['message'] ?? 'N/A' }}</td>--}}
{{--    </tr>--}}

{{--    @if(isset($mailData['additional']) && is_array($mailData['additional']))--}}
{{--        @foreach($mailData['additional'] as $additional)--}}
{{--            <tr>--}}
{{--                <td>{{ $additional['name'] ?? 'N/A' }}</td>--}}
{{--                <td>{{ $additional['email'] ?? 'N/A' }}</td>--}}
{{--                <td>{{ $additional['subject'] ?? 'N/A' }}</td>--}}
{{--                <td>{{ $additional['message'] ?? 'N/A' }}</td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--    @endif--}}
{{--</table>--}}

{{--<a href="http://www.zasusoft.com/" class="button">Visit Our Website</a>--}}
{{--<p>Thanks,</p>--}}
{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
    <title>Email</title>
</head>
<body>
<!--wrapper grey-->
<table align="center" bgcolor="#EAECED" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <!--First  table section with logo-->
        <tr>
            <td align="center" valign="top">
                <table width="600">
                    <tbody>
                        <tr>
                        <td align="center" valign="top">
                            <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0"
                                   style="overflow:hidden!important; border-radius:3px" width="600">
                                <tbody>
                                    <tr style="background: #333333; line-height: 3.5">
                                    <td align="Left" valign="top" style="width: 55px; padding:1px 5px 5px 32px;">
                                        <a href="https://tidyinternational.com/Content/TidyEnterpriseLogo(green).png">
                                            <img src="https://tidyinternational.com/Content/TidyEnterpriseLogo(green).png"
                                                title="Tidy Logo">
                                        </a>
                                    </td>
                                    <td align="Left" valign="top">
                                        <p style="font-family:Arial;font-style:normal;font-weight:bold;font-size:14px;text-align:right;color:#ffffff; padding:1px 32px 5px 4px;">
                                            <span>20 Dec 2018 </span></p>

                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <!--Separate table for header and content-->
                <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" width="600">
                    <tbody>
                    <tr>
                        <td align="center">
                            <table width="85%">
                                <tbody>
                                <!--Content header Intro header-->
                                <tr>
                                    <td align="left">
                                        <h2 style="font-family:Arial;font-style:normal;font-weight:bold;line-height:30px;font-size:24px;color:#333333;">
                                            Email Introduction</h2>
                                    </td>
                                </tr>

                                <!--para 1-->
                                <tr>
                                    <td align="left"
                                        style="font-family:Arial;font-style:normal;font-weight:normal;line-height:22px;font-size:14px;color:#333333;">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet
                                        consequuntur dolore ducimus error eveniet fugiat, necessitatibus officiis qui
                                        quibusdam, sint sunt suscipit vitae? Ab amet nihil repudiandae sapiente vero.
                                    </td>
                                </tr>
                                <!--spacing-->
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>

                                <!--para 2-->
                                <tr>
                                    <td align="left"
                                        style="font-family:Arial;font-style:normal;font-weight:normal;line-height:22px;font-size:14px;color:#333333;">
                                        Aliquid nobis velit voluptatem? A alias atque aut beatae culpa dolore doloremque
                                        dolores dolorum eius eos eveniet explicabo, hic ipsum magnam molestiae nesciunt non
                                        numquam odit possimus qui quo suscipit velit veniam.
                                    </td>
                                </tr>
                                <!--spacing-->
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>


                                </tbody>

                            </table>


                        </td>

                    </tr>


                    </tbody>
                </table>

            </td>
            <!--first table section td ending-->
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <!--Second  table section with image-->
        <tr>
            <td align="center" valign="top">
                <table width="600">
                    <tbody>

                    <tr>
                        <td align="center" valign="top">
                            <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0"
                                   style="overflow:hidden!important;border-radius:3px" width="580">
                                <tbody>
                                <tr>
                                    <td>
                                        <a href="https://imgur.com/rgPFGBp"><img src="https://i.imgur.com/rgPFGBp.png"
                                                                                 title="Email Template Img"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <table width="85%">
                                            <tbody>
                                            <!--Content Block 1 header-->
                                            <tr>
                                                <td align="left">
                                                    <h2 style="font-family:Arial;font-style:normal;font-weight:bold;line-height:30px;font-size:24px;color:#333333;">
                                                        Content block title</h2>
                                                </td>
                                            </tr>
                                            <!--para 1-->
                                            <tr>
                                                <td align="left"
                                                    style="font-family:Arial;font-style:normal;font-weight:normal;line-height:22px;font-size:14px;color:#333333;">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aut
                                                    consectetur consequuntur corporis cum cumque delectus, dolor doloremque
                                                    eos esse fuga magni, necessitatibus nesciunt pariatur quasi, quis
                                                    quisquam sit? Culpa labore magni maiores minima omnis!
                                                </td>
                                            </tr>
                                            <!--spacing-->
                                            <tr>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <!--para 2-->
                                            <tr>
                                                <td align="left"
                                                    style="font-family:Arial;font-style:normal;font-weight:normal;line-height:22px;font-size:14px;color:#333333;">
                                                    Fugiat hic id libero maiores nisi quidem sit, suscipit velit veniam
                                                    voluptatum! Adipisci amet architecto beatae consectetur corporis
                                                    distinctio dolorem doloribus eligendi, enim explicabo, facere fuga illo
                                                    magni minima molestias nam nostrum praesentium quas quo, sunt ut vero.
                                                </td>
                                            </tr>
                                            <!--Content Block 2  sub header-->
                                            <tr>
                                                <td align="left">
                                                    <h2 style="font-family:Arial;font-style:normal;font-weight:bold;line-height:30px;font-size:16px;color:#333333;">
                                                        Subheading</h2>
                                                </td>
                                            </tr>

                                            <!--para 1-->
                                            <tr>
                                                <td align="left"
                                                    style="font-family:Arial;font-style:normal;font-weight:normal;line-height:22px;font-size:14px;color:#333333;">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aut
                                                    consectetur consequuntur corporis cum cumque delectus, dolor doloremque
                                                    eos esse fuga magni, necessitatibus nesciunt pariatur quasi, quis
                                                    quisquam sit? Culpa labore magni maiores minima omnis!
                                                </td>
                                            </tr>
                                            <!--spacing-->
                                            <tr>
                                                <td>&nbsp;</td>
                                            </tr>

                                            <!--Button-->
                                            <tr>
                                                <td align="left" valign="top">
                                                    <a href="http://tidyinternational.com"
                                                       style="background-color:#04B7A6;padding:14px 28px 14px 28px;border-radius:4px;line-height:18px!important;letter-spacing:0.125em;text-transform:uppercase;font-size:13px;font-family:Arial;font-weight:bold;color:#ffffff;text-decoration:none;display:inline-block;line-height:18px!important"
                                                       target="_blank">Button Action</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!--spacing-->
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="center" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>


                    <tr>
                        <td>&nbsp;</td>
                    </tr>

                    <!--Logo and unsubscription area-->
                    <tr>
                        <td align="center">
                            <table border="0" cellpadding="0" cellspacing="0" width="580">
                                <tbody>
                                <tr>
                                    <td align="Left" valign="top" style="width: 55px;">
                                        <a href="https://tidyinternational.com/Content/TidyLogoSmall(charcoal).png" style="text-decoration: none;"><img
                                                src="https://tidyinternational.com/Content/TidyLogoSmall(charcoal).png"
                                                style="height:45px" title="Tidy Logo"></a>

                                    </td>

                                    <td align="Left" valign="top">
                                        <p style="font-family:Arial;font-style:normal;font-weight:bold;font-size:14px;text-align:left;color:#333333;">
                                                        <span>tidyinternational.com
                                                        </span></p>

                                    </td>
                                    <td align="Left" valign="top">
                                        <a href="http://tidyinternational.com" style="text-decoration: none;"
                                           target="_blank">

                                            <p style="font-family:Arial;font-style:normal;font-weight:bold;font-size:14px;text-align:right;color:#333333;">
                                                        <span>Unsubscribe
                                                        </span></p>
                                        </a>


                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr style="padding:0;margin:0;font-size:0;line-height:0">
                                    <td>&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr> <!--ending tr tag-->
                    </tbody>
                </table>
                <!--Separate table for Copyright and company address-->
                <table border="0" cellpadding="0" cellspacing="0" width="580">
                    <tbody>
                    <!--Footer Company Name-->
                    <tr>
                        <td align="left" valign="top">
                            <p style="margin-bottom:1em; padding:0!important;font-family:Arial;font-style:normal;font-weight:normal;font-size:14px;color:#999999;">
                                                        <span>© 2018 Tidy International Group Ltd.
                                                        </span></p>
                        </td>
                    </tr>
                    <!--Footer address-->
                    <tr>
                        <td align="left" valign="top">
                            <p style="margin-bottom:1em; padding:0!important;margin:0!important;font-family:Arial;font-style:normal;font-weight:normal;font-size:14px;color:#999999;">
                                                        <span>525 Cameron Road,
                                                        Tauranga 3110, New Zealand
                                                        </span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>

                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table> <!-- - main tabel grey bg-->
</body>
</html>
