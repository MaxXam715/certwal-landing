<?php

function tmplMail_bonus($data) {
$body = '
<table bgcolor="#DADADA" border="0" cellpadding="0" cellspacing="0" style="margin:0; padding:0; font-family: Helvetica, Arial, sans-serif;" width="100%">
    <tbody>
        <tr>
            <td height="30"></td>
        </tr>
        <tr>
            <td>
                <center>
                    <table width="600px" bgcolor="#131313" style="color: #ffffff">
                        <tr>
                            <td height="80" style="padding: 0 30px; border-bottom: 1px solid #424242">
                                <img alt="" width="180" height="20" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgwIiBoZWlnaHQ9IjIwIiB2aWV3Qm94PSIwIDAgMTgwIDIwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNNy42NTIyMSA0LjQ2MzkzSDIyLjQ2M0MyMi43OTIxIDQuNDYzOTMgMjMuMDY2NCA0LjIxNzA5IDIzLjA2NjQgMy44ODc5NlYxLjE3MjY1QzIzLjA2NjQgMC44NzA5NTMgMjIuNzkyMSAwLjU5NjY4IDIyLjQ2MyAwLjU5NjY4SDcuNjUyMjFDMy40Mjg0MSAwLjU5NjY4IDAgNC4wMjUwOSAwIDguMjQ4OVYxMi4xNDM2QzAgMTYuMzY3NCAzLjQyODQxIDE5Ljc5NTggNy42NTIyMSAxOS43OTU4SDIyLjQ2M0MyMi43OTIxIDE5Ljc5NTggMjMuMDY2NCAxOS41MjE1IDIzLjA2NjQgMTkuMjE5OFYxNi41MDQ1QzIzLjA2NjQgMTYuMTc1NCAyMi43OTIxIDE1LjkyODUgMjIuNDYzIDE1LjkyODVINy42NTIyMUM1LjU2Nzc0IDE1LjkyODUgMy44NjcyNCAxNC4yMjgxIDMuODY3MjQgMTIuMTQzNlY4LjI0ODlDMy44NjcyNCA2LjE2NDQyIDUuNTY3NzQgNC40NjM5MyA3LjY1MjIxIDQuNDYzOTNaIiBmaWxsPSJ3aGl0ZSIvPgo8cGF0aCBkPSJNNDguNDc0NyAwLjU5NjY4SDI2LjU4NzdDMjYuMjg2IDAuNTk2NjggMjYuMDExNyAwLjg0MzUyNiAyNi4wMTE3IDEuMTcyNjVWMy44ODc5NkMyNi4wMTE3IDQuMjE3MDkgMjYuMjg2IDQuNDYzOTMgMjYuNTg3NyA0LjQ2MzkzSDQ4LjQ3NDdDNDguODAzOCA0LjQ2MzkzIDQ5LjA3ODEgNC4yMTcwOSA0OS4wNzgxIDMuODg3OTZWMS4xNzI2NUM0OS4wNzgxIDAuODQzNTI2IDQ4LjgwMzggMC41OTY2OCA0OC40NzQ3IDAuNTk2NjhaTTQ4LjQ3NDcgMTUuOTI4NUgyOS44NzlWMTIuMTQzNkg0NC42MDc0QzQ0LjkzNjYgMTIuMTQzNiA0NS4xODM0IDExLjg2OTMgNDUuMTgzNCAxMS41NDAyVjguODUyM0M0NS4xODM0IDguNTIzMTcgNDQuOTM2NiA4LjI0ODkgNDQuNjA3NCA4LjI0ODlIMjYuNTg3N0MyNi4yODYgOC4yNDg5IDI2LjAxMTcgOC41MjMxNyAyNi4wMTE3IDguODUyM1YxOS4yMTk4QzI2LjAxMTcgMTkuNTIxNSAyNi4yODYgMTkuNzk1OCAyNi41ODc3IDE5Ljc5NThINDguNDc0N0M0OC44MDM4IDE5Ljc5NTggNDkuMDc4MSAxOS41MjE1IDQ5LjA3ODEgMTkuMjE5OFYxNi41MDQ1QzQ5LjA3ODEgMTYuMTc1NCA0OC44MDM4IDE1LjkyODUgNDguNDc0NyAxNS45Mjg1WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTUyLjEwNzQgMTkuMjE5OEM1Mi4xMDc0IDE5LjUyMTUgNTIuMzgxNyAxOS43OTU4IDUyLjY4MzQgMTkuNzk1OEg1NS4zOTg3QzU1LjcyNzggMTkuNzk1OCA1NS45NzQ3IDE5LjUyMTUgNTUuOTc0NyAxOS4yMTk4VjEyLjE0MzZINjUuNzkzNkM2Ni43MjYyIDEyLjE0MzYgNjcuNjAzOCAxMi42MzczIDY4LjA3MDEgMTMuNDYwMUw3MS40NzExIDE5LjQ5NDFDNzEuNTgwOCAxOS42ODYxIDcxLjc3MjggMTkuNzk1OCA3MS45OTIyIDE5Ljc5NThINzUuMTE4OUM3NS41NTc4IDE5Ljc5NTggNzUuODMyIDE5LjMwMjEgNzUuNjEyNiAxOC45MTgxTDcxLjUyNTkgMTEuNzA0N0M3My42Mzc4IDEwLjg1NDUgNzUuMTE4OSA4Ljc3MDAyIDc1LjExODkgNi4zNTY0MUM3NS4xMTg5IDMuMTc0ODUgNzIuNTEzMyAwLjU5NjY4IDY5LjMzMTggMC41OTY2OEg1Mi42ODM0QzUyLjM4MTcgMC41OTY2OCA1Mi4xMDc0IDAuODQzNTI2IDUyLjEwNzQgMS4xNzI2NVYzLjg4Nzk2QzUyLjEwNzQgNC4yMTcwOSA1Mi4zODE3IDQuNDYzOTMgNTIuNjgzNCA0LjQ2MzkzSDY5LjMzMThDNzAuMzc0IDQuNDYzOTMgNzEuMjI0MiA1LjMxNDE4IDcxLjIyNDIgNi4zNTY0MUM3MS4yMjQyIDcuMzk4NjUgNzAuMzc0IDguMjQ4OSA2OS4zMzE4IDguMjQ4OUg1Mi42ODM0QzUyLjM4MTcgOC4yNDg5IDUyLjEwNzQgOC41MjMxNyA1Mi4xMDc0IDguODI0ODdWMTkuMjE5OFoiIGZpbGw9IndoaXRlIi8+CjxwYXRoIGQ9Ik0xMDAuMDY3IDAuNTk2NjhINzcuOTg4MUM3Ny42ODY0IDAuNTk2NjggNzcuNDEyMSAwLjg0MzUyNiA3Ny40MTIxIDEuMTcyNjVWMy44ODc5NkM3Ny40MTIxIDQuMjE3MDkgNzcuNjg2NCA0LjQ2MzkzIDc3Ljk4ODEgNC40NjM5M0g4Ny4wOTRWMTkuMjE5OEM4Ny4wOTQgMTkuNTIxNSA4Ny4zNDA4IDE5Ljc5NTggODcuNjY5OSAxOS43OTU4SDkwLjM4NTJDOTAuNzE0NCAxOS43OTU4IDkwLjk2MTIgMTkuNTIxNSA5MC45NjEyIDE5LjIxOThWNC40NjM5M0gxMDAuMDY3QzEwMC4zNjkgNC40NjM5MyAxMDAuNjQzIDQuMjE3MDkgMTAwLjY0MyAzLjg4Nzk2VjEuMTcyNjVDMTAwLjY0MyAwLjg0MzUyNiAxMDAuMzY5IDAuNTk2NjggMTAwLjA2NyAwLjU5NjY4WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTEzMC4wMzQgMC41OTY2OEgxMjcuMzE5QzEyNy4wMTcgMC41OTY2OCAxMjYuNzQzIDAuODcwOTUzIDEyNi43NDMgMS4xNzI2NVYxMi40MTc4QzEyNi43NDMgMTQuMzY1MiAxMjUuMTggMTUuOTI4NSAxMjMuMjYgMTUuOTI4NUgxMjIuMzI3QzEyMC40MDcgMTUuOTI4NSAxMTguODQ0IDE0LjM2NTIgMTE4Ljg0NCAxMi40MTc4VjEuMTcyNjVDMTE4Ljg0NCAwLjg0MzUyNiAxMTguNTcgMC41OTY2OCAxMTguMjQxIDAuNTk2NjhIMTE1LjUyNUMxMTUuMjI0IDAuNTk2NjggMTE0Ljk0OSAwLjg0MzUyNiAxMTQuOTQ5IDEuMTcyNjVWMTIuNDE3OEMxMTQuOTQ5IDEzLjY3OTUgMTE1LjI3OCAxNC44ODYzIDExNS44MjcgMTUuOTI4NUgxMTAuNDUxQzEwOC41MDQgMTUuOTI4NSAxMDYuOTQgMTQuMzY1MiAxMDYuOTQgMTIuNDE3OFYxLjE3MjY1QzEwNi45NCAwLjg0MzUyNiAxMDYuNjk0IDAuNTk2NjggMTA2LjM2NSAwLjU5NjY4SDEwMy42NDlDMTAzLjM0OCAwLjU5NjY4IDEwMy4wNzMgMC44NDM1MjYgMTAzLjA3MyAxLjE3MjY1VjEyLjQxNzhDMTAzLjA3MyAxNi40NzcxIDEwNi4zOTIgMTkuNzk1OCAxMTAuNDUxIDE5Ljc5NThIMTIzLjI2QzEyNy4zMTkgMTkuNzk1OCAxMzAuNjM4IDE2LjUwNDUgMTMwLjYzOCAxMi40MTc4VjEuMTcyNjVDMTMwLjYzOCAwLjg0MzUyNiAxMzAuMzYzIDAuNTk2NjggMTMwLjAzNCAwLjU5NjY4WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTE1Ny45NDYgMTguOTQ2TDE0OS42OTEgMy4wMTA3OEMxNDguODQgMS4zNjUxNCAxNDcuMjUgMC4xODU3NjkgMTQ1LjQxMiAwLjAyMTIwNTZDMTQzLjIxOCAtMC4xNzA3ODYgMTQxLjIxNiAwLjk1MzczNCAxNDAuMjI4IDIuODczNjVMMTMxLjg5IDE4Ljk0NkMxMzEuNjk4IDE5LjMzIDEzMS45NzMgMTkuNzk2MyAxMzIuNDExIDE5Ljc5NjNIMTM1LjQ4M0MxMzUuNzAzIDE5Ljc5NjMgMTM1Ljg5NSAxOS42ODY2IDEzNi4wMDQgMTkuNDk0NkwxNDMuNjU3IDQuNjU2NDJDMTQ0LjAxMyAzLjk3MDc0IDE0NC42NzEgMy44ODg0NiAxNDQuOTE4IDMuODg4NDZDMTQ1LjE2NSAzLjg4ODQ2IDE0NS44MjMgMy45NzA3NCAxNDYuMTggNC42NTY0MkwxNTMuODMyIDE5LjQ5NDZDMTUzLjk0MiAxOS42ODY2IDE1NC4xMzQgMTkuNzk2MyAxNTQuMzUzIDE5Ljc5NjNIMTU3LjQyNUMxNTcuODY0IDE5Ljc5NjMgMTU4LjEzOCAxOS4zMyAxNTcuOTQ2IDE4Ljk0NloiIGZpbGw9IndoaXRlIi8+CjxwYXRoIGQ9Ik0xNzkuNDI0IDE1LjkyODVIMTY2LjAxMkMxNjQuNTMxIDE1LjkyODUgMTYzLjI5NyAxNC42OTQzIDE2My4yOTcgMTMuMjEzMlYxLjE3MjY1QzE2My4yOTcgMC44NzA5NTMgMTYzLjA1IDAuNTk2NjggMTYyLjcyMSAwLjU5NjY4SDE2MC4wMDZDMTU5LjcwNCAwLjU5NjY4IDE1OS40MyAwLjg3MDk1MyAxNTkuNDMgMS4xNzI2NVYxMy4yMTMyQzE1OS40MyAxNi44MzM2IDE2Mi4zOTIgMTkuNzk1OCAxNjYuMDEyIDE5Ljc5NThIMTc5LjQyNEMxNzkuNzUzIDE5Ljc5NTggMTgwIDE5LjU0ODkgMTgwIDE5LjIxOThWMTYuNTA0NUMxODAgMTYuMTc1NCAxNzkuNzUzIDE1LjkyODUgMTc5LjQyNCAxNS45Mjg1WiIgZmlsbD0id2hpdGUiLz4KPC9zdmc+Cg==">
                            </td>
                        </tr>
                        <tr>
                            <td height="30"></td>
                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <img src="/icon-cert.png" alt="" width="140" height="140">
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td height="30"></td>
                        </tr>
                        <tr>
                            <td style="padding: 0 30px">
                                <span style="color: #ffffff; font-size: 30px; font-weight:bold; -webkit-text-size-adjust:none; display: block; text-align: center">Активация бонусов через сертификат</span>
                            </td>
                        </tr>
                        <tr>
                            <td height="40"></td>
                        </tr>
                        <!-- клиент -->
                        <tr>
                            <td style="padding: 0 30px">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#1F1F1F" style="padding: 0 30px">
                                    <thead>
                                        <tr>
                                            <th height="60" colspan="2">КЛИЕНТ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="padding: 0 30px">
                                            <td width="50%" height="40" style="border-bottom: 1px solid #424242">Имя</td>
                                            <td width="50%" height="40" style="border-bottom: 1px solid #424242; text-align: right">Алексей</td>
                                        </tr>
                                        <tr style="padding: 0 30px">
                                            <td width="50%" height="40" style="border-bottom: 1px solid #424242">Телефон</td>
                                            <td width="50%" height="40" style="border-bottom: 1px solid #424242; text-align: right">+7 (495) 512-13-65</td>
                                        </tr>
                                        <tr style="padding: 0 30px">
                                            <td width="50%" height="40">E-mail</td>
                                            <td width="50%" height="40" style="text-align: right">не указан</td>
                                        </tr>
                                        <tr>
                                            <td height="10"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td height="20"></td>
                        </tr>

                        <!-- сертификат -->
                        <tr>
                            <td style="padding: 0 30px">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#1F1F1F" style="padding: 0 30px">
                                    <thead>
                                        <tr>
                                            <th height="60" colspan="2">СЕРТИФИКАТ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="padding: 0 30px">
                                            <td width="50%" height="40" style="border-bottom: 1px solid #424242">Серия</td>
                                            <td width="50%" height="40" style="border-bottom: 1px solid #424242; text-align: right">A</td>
                                        </tr>
                                        <tr style="padding: 0 30px">
                                            <td width="50%" height="40" style="border-bottom: 1px solid #424242">Номер</td>
                                            <td width="50%" height="40" style="border-bottom: 1px solid #424242; text-align: right">0851238</td>
                                        </tr>
                                        <tr style="padding: 0 30px">
                                            <td width="50%" height="40">Кошелек</td>
                                            <td width="50%" height="40" style="text-align: right">не указан</td>
                                        </tr>
                                        <tr>
                                            <td height="10"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="20"></td>
                        </tr>
                        <tr>
                            <td height="34">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <span style="width: 34px; height: 34px; border-radius: 50px; background: #DADADA; display: block; margin-left: -19px;"></span>
                                        </td>
                                        <td width="100%">
                                            <span style="display: block; width: 100%; height: 1px; border: 1px solid #DADADA;"></span>
                                        </td>
                                        <td>
                                            <span style="width: 34px; height: 34px; border-radius: 50px; background: #DADADA; display: block; margin-right: -19px;"></span>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="60">
                                <center>
                                    <span style="display: block; width: 360px; color: #717171; font-size: 14px; font-style: italic; -webkit-text-size-adjust:none; text-align: center">Данное письмо сформировано автоматически. Просьба не отвечать на него</span>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td height="10"></td>
                        </tr>
                    </table>
                </center>
            </td>
        </tr>
        <tr>
            <td height="30"></td>
        </tr>
    </tbody>
</table>';

return $body;
}


//foreach ($data['dataForm'] as $key => $value) {
//    $body .= "
//        <div>
//            <span>$key:</span>
//            <span>$value</span>
//        </div>";
//}
