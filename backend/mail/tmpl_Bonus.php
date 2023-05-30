<?php

function tmplMail_bonus($data) {

    $name = ($data['dataForm']['Имя'] != '' && $data['dataForm']['Имя'] ) ? $data['dataForm']['Имя'] : 'Не указано';
    $mail = ($data['dataForm']['Почта'] != '' && $data['dataForm']['Почта'] ) ? $data['dataForm']['Почта'] : 'Не указано';
    $phone = ($data['dataForm']['Телефон'] != '' && $data['dataForm']['Телефон'] ) ? $data['dataForm']['Телефон'] : 'Не указано';
    $numberCert = ($data['dataForm']['Номер сертификата'] != '' && $data['dataForm']['Номер сертификата'] ) ? $data['dataForm']['Номер сертификата'] : 'Не указано';
    $wallet = ($data['dataForm']['Кошелек'] != '' && $data['dataForm']['Кошелек'] ) ? $data['dataForm']['Кошелек'] : 'Не указано';


return <<<HTML
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
                                    <img alt="" width="140" height="140" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxjaXJjbGUgb3BhY2l0eT0iMC4xIiBjeD0iNzAiIGN5PSI3MCIgcj0iNzAiIGZpbGw9IiNDREYyQTIiLz4KPGNpcmNsZSBjeD0iNzAiIGN5PSI3MCIgcj0iNDguMTAwNiIgZmlsbD0iIzlBRTk0MCIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTk1IDc2LjY1MzZDOTUgNzguMDY2NSA5My44NTMyIDc5LjIxODIgOTIuNDQ4MiA3OS4yMTgySDgyLjM1OTdDODIuMjIwMiA3OC45MjA4IDgyLjAxNjYgNzguNjUyOSA4MS43NTU0IDc4LjQyODlMODAuNjI0NyA3Ny40NTk4TDgxLjE1MDQgNzYuMDY1Nkg4Ni43OTU0Qzg3LjAyMDggNzYuMDY1NiA4Ny4yMzc2IDc1LjkzNjkgODcuMzQzMiA3NS43MTkzQzg4LjMyNTcgNzMuNzExNCA4OS45NjgzIDcyLjA1MjIgOTEuOTYwNiA3MS4wNTMyQzkyLjE5MSA3MC45NjQ4IDkyLjM1NDUgNzAuNzQwOCA5Mi4zNTQ1IDcwLjQ3ODNWNTQuNzM5NkM5Mi4zNTQ1IDU0LjUxMyA5Mi4yMjY0IDU0LjI5NTEgOTIuMDA5OSA1NC4xODkxQzkwLjAxMiA1My4yMDE2IDg4LjM2MTEgNTEuNTUwOCA4Ny4zNjcxIDQ5LjU0ODZDODcuMjc5MSA0OS4zMTcgODcuMDU2MiA0OS4xNTI2IDg2Ljc5NSA0OS4xNTI2TDU0LjIwNDggNDkuMTUzQzUzLjk3OTQgNDkuMTUzIDUzLjc2MjYgNDkuMjgxNyA1My42NTcxIDQ5LjQ5OTNDNTIuNjc0NSA1MS41MDcyIDUxLjAzMTkgNTMuMTY2NCA0OS4wMzk3IDU0LjE2NTRDNDguODA5MiA1NC4yNTM4IDQ4LjY0NTcgNTQuNDc3OSA0OC42NDU3IDU0Ljc0MDRWNzAuNDc5QzQ4LjY0NTcgNzAuNzA1NiA0OC43NzM4IDcwLjkyMzUgNDguOTkwMyA3MS4wMjk2QzUwLjk4ODIgNzIuMDE3IDUyLjYzOTEgNzMuNjY3OSA1My42MzI0IDc1LjY3MDFDNTMuNzIwNCA3NS45MDE2IDUzLjk0MzMgNzYuMDY2IDU0LjIwNDUgNzYuMDY2SDU5LjgxOEw2MC4zNDY1IDc3LjU2ODNMNTkuMjg2NCA3OC40MzQ5QzU5LjAxNzcgNzguNjU1IDU4LjgwNTggNzguOTIwNyA1OC42NTk1IDc5LjIxODhINDguNTUxOEM0Ny4xNDYgNzkuMjE4OCA0NiA3OC4wNjYzIDQ2IDc2LjY1NDNWNDguNTY0NkM0NiA0Ny4xNTE3IDQ3LjE0NjggNDYgNDguNTUxOCA0Nkg5Mi40NDc3QzkzLjg1MzUgNDYgOTQuOTk5NSA0Ny4xNTI1IDk0Ljk5OTUgNDguNTY0NlY3Ni42NTQzTDk1IDc2LjY1MzZaTTgwLjkzOTkgODEuMDk4MUM4MS40ODY2IDgwLjY1MTUgODEuNDk2MyA3OS44MjQ4IDgwLjk1OTYgNzkuMzY1M0w3OS43NzM1IDc4LjM0ODNDNzkuNDA2IDc4LjAzMyA3OS4yODA4IDc3LjU0MjggNzkuNDUzMyA3Ny4wODg2TDc5Ljk2NTYgNzUuNzM3NkM4MC4yMTY4IDc1LjA3NiA3OS44MTM5IDc0LjM1NTMgNzkuMTIwOSA3NC4yMjdMNzcuNTg4MSA3My45NDI2Qzc3LjExMjYgNzMuODU0NSA3Ni43NjA5IDczLjQ5MiA3Ni42ODM5IDczLjAxMjZMNzYuNDU1NyA3MS41ODQ3Qzc2LjM0NCA3MC44ODU2IDc1LjYzNjcgNzAuNDYzOCA3NC45NzI2IDcwLjcwMDhMNzMuNTAzMSA3MS4yMjQ3QzczLjA0NzMgNzEuMzg2OSA3Mi41NjI4IDcxLjI1MDYgNzIuMjU3NiA3MC44NzM0TDcxLjM0OTEgNjkuNzUxNEM3MC45MDQ3IDY5LjIwMiA3MC4wODIyIDY5LjE5MjMgNjkuNjI0OSA2OS43MzE3TDY4LjYxMzQgNzAuOTIzN0M2OC4yOTk2IDcxLjI5MyA2Ny44MTE5IDcxLjQxODggNjcuMzYgNzEuMjQ1NUw2Ni4wMTU3IDcwLjczMDZDNjUuMzU3NCA3MC40NzgyIDY0LjY0MDMgNzAuODgzIDY0LjUxMjYgNzEuNTc5Nkw2NC4yMjk2IDczLjEyQzY0LjE0MiA3My41OTc5IDYzLjc4MTMgNzMuOTUxNCA2My4zMDQzIDc0LjAyODdMNjEuODgzNSA3NC4yNTgxQzYxLjE4NzkgNzQuMzcwMyA2MC43NjgyIDc1LjA4MTIgNjEuMDA0IDc1Ljc0ODZMNjEuNTI1MyA3Ny4yMjU0QzYxLjY4NjcgNzcuNjgzNiA2MS41NTExIDc4LjE3MDUgNjEuMTc1NyA3OC40NzcyTDYwLjA1OTMgNzkuMzkwMkM1OS41MTI2IDc5LjgzNjggNTkuNTAzIDgwLjY2MzUgNjAuMDM5NyA4MS4xMjMxTDYxLjIyNTggODIuMTRDNjEuNTkzMiA4Mi40NTU0IDYxLjcxODQgODIuOTQ1NSA2MS41NDYgODMuMzk5N0w2MS4wMzM2IDg0Ljc1MTRDNjAuNzgyNCA4NS40MTMxIDYxLjE4NTMgODYuMTMzNyA2MS44Nzg0IDg2LjI2Mkw2My40MTEyIDg2LjU0NjVDNjMuODg2NyA4Ni42MzQ2IDY0LjIzODQgODYuOTk3IDY0LjMxNTMgODcuNDc2NEw2NC41NDM2IDg4LjkwNDRDNjQuNjU1MiA4OS42MDM0IDY1LjM2MjYgOTAuMDI1MiA2Ni4wMjY2IDg5Ljc4ODJMNjcuNDk2MSA4OS4yNjQzQzY3Ljk1MiA4OS4xMDE4IDY4LjQzNjUgODkuMjM4NCA2OC43NDE3IDg5LjYxNTZMNjkuNjUwMSA5MC43Mzc2QzcwLjA5NDUgOTEuMjg3MSA3MC45MTcxIDkxLjI5NjggNzEuMzc0MyA5MC43NTc0TDcyLjM4NTggODkuNTY1NEM3Mi42OTk2IDg5LjE5NjEgNzMuMTg3MyA4OS4wNzAyIDczLjYzOTIgODkuMjQzNUw3NC45ODM1IDg5Ljc1ODVDNzUuNjQxOSA5MC4wMTA5IDc2LjM1ODkgODkuNjA2IDc2LjQ4NjYgODguOTA5NUw3Ni43Njk2IDg3LjM2OUM3Ni44NTczIDg2Ljg5MTEgNzcuMjE4IDg2LjUzNzcgNzcuNjk0OSA4Ni40NjAzTDc5LjExNTggODYuMjMwOUM3OS44MTE0IDg2LjExODcgODAuMjMxMSA4NS40MDc4IDc5Ljk5NTMgODQuNzQwNUw3OS40NzQgODMuMjYzNkM3OS4zMTI2IDgyLjgwNTUgNzkuNDQ4MiA4Mi4zMTg2IDc5LjgyMzUgODIuMDExOEw4MC45Mzk5IDgxLjA5ODhWODEuMDk4MVpNNzAuNDk5NyA4Ny41MDAzQzY2LjUxMiA4Ny41MDAzIDYzLjI3OTcgODQuMjUxNCA2My4yNzk3IDgwLjI0NDFDNjMuMjc5NyA3Ni4yMzY1IDY2LjUxMjQgNzIuOTg4IDcwLjQ5OTcgNzIuOTg4Qzc0LjQ4NzQgNzIuOTg4IDc3LjcxOTcgNzYuMjM2OSA3Ny43MTk3IDgwLjI0NDFDNzcuNzE5NyA4NC4yNTE3IDc0LjQ4NyA4Ny41MDAzIDcwLjQ5OTcgODcuNTAwM1pNNzQuNzM4OSA3NS45ODMyQzcyLjM5NzUgNzMuNjMwMSA2OC42MDEyIDczLjYzMDEgNjYuMjYwNSA3NS45ODMyQzYzLjkxOTEgNzguMzM2NCA2My45MTkxIDgyLjE1MTcgNjYuMjYwNSA4NC41MDQxQzY4LjYwMTkgODYuODU3MiA3Mi4zOTgyIDg2Ljg1NzIgNzQuNzM4OSA4NC41MDQxQzc3LjA4MDMgODIuMTUwOSA3Ny4wODAzIDc4LjMzNTYgNzQuNzM4OSA3NS45ODMyWk02MC42MTM4IDkyLjQ4MzJMNjMuMTY1NiA4OC4wNDEyTDYzLjMzNDggODkuMDk4M0M2My41Njc3IDkwLjU1NTggNjUuMDUzMyA5MS40NDA3IDY2LjQzNjkgOTAuOTQ3NEw2Ny4xOTggOTAuNjc2Mkw2NC43NzMxIDk0Ljg5NzFDNjQuNjg5NyA5NS4wNDI4IDY0LjQ3ODMgOTUuMDMxMyA2NC40MSA5NC44Nzg0TDYzLjQyNDYgOTIuNjU5N0M2My4zODc3IDkyLjU3NyA2My4zMDY1IDkyLjUyOTkgNjMuMjE2NyA5Mi41MzkzTDYwLjgxMTkgOTIuNzkxQzYwLjY0NjIgOTIuODA4MiA2MC41MzEgOTIuNjI4OCA2MC42MTQgOTIuNDg0M0w2MC42MTM4IDkyLjQ4MzJaTTgwLjM4NjggOTIuNDgzMkM4MC40NzAxIDkyLjYyODEgODAuMzU0MiA5Mi44MDY4IDgwLjE4ODkgOTIuNzg5OUw3Ny43ODQxIDkyLjUzODJDNzcuNjk1IDkyLjUyOTIgNzcuNjEzMSA5Mi41NzYzIDc3LjU3NjIgOTIuNjU4N0w3Ni41OTA4IDk0Ljg3NzRDNzYuNTIyOCA5NS4wMzA2IDc2LjMxMDcgOTUuMDQxNyA3Ni4yMjc3IDk0Ljg5NjFMNzMuNzYzNSA5MC42MDY1TDc0LjU0NzggOTAuOTA3MUM3NS45MTM5IDkxLjQzMDcgNzcuNDI2MyA5MC41NzYzIDc3LjY5MTggODkuMTMxNUw3Ny44NzgyIDg4LjExNjhMODAuMzg2NCA5Mi40ODI5TDgwLjM4NjggOTIuNDgzMlpNODYuNDIzOSA1MC4zODM2SDU0LjU3NjZDNTMuNTA1OCA1Mi4zOTc3IDUxLjg3NTYgNTQuMDM2NCA0OS44NzE2IDU1LjExMjJWNzAuMTA1MkM1MS44NzUzIDcxLjE4MDggNTMuNTA2NSA3Mi44MjAxIDU0LjU3NjYgNzQuODMzOEg1OS43NzRDNTkuOTkzIDczLjkwODYgNjAuNzMzNyA3My4xOTY2IDYxLjY5IDczLjA0MjRMNjMuMDM5MyA3Mi44MjQ0TDYzLjMwOSA3MS4zNTUyQzYzLjU3NDUgNjkuOTEgNjUuMDg2NiA2OS4wNTYzIDY2LjQ1MyA2OS41Nzk1TDY3LjcyOTkgNzAuMDY4NUw2OC42OTQyIDY4LjkzMjJDNjkuNjQ3MyA2Ny44MDkyIDcxLjM3MzggNjcuODI5NyA3Mi4zMDA0IDY4Ljk3MzlMNzMuMTYyNyA3MC4wMzk0TDc0LjU2MzkgNjkuNTM5OUM3NS45NDc4IDY5LjA0NjUgNzcuNDMzMSA2OS45MzE1IDc3LjY2NiA3MS4zODg5TDc3Ljg4MjggNzIuNzQ0OUw3OS4zNDQ4IDczLjAxNkM4MC4yOTA0IDczLjE5MTUgODEuMDExNCA3My45MTExIDgxLjIxNSA3NC44MzM3SDg2LjQyNUM4Ny40OTUyIDcyLjgyIDg5LjEyNjMgNzEuMTgwNiA5MS4xMyA3MC4xMDUxVjU1LjExMjFDODkuMTI2IDU0LjAzNTkgODcuNDk1NCA1Mi4zOTc2IDg2LjQyNSA1MC4zODM1TDg2LjQyMzkgNTAuMzgzNlpNNjEuMTc3MSA1NS4xNDI0SDc5LjgyMzRDODAuMTYxNiA1NS4xNDI0IDgwLjQzNTYgNTUuNDE3OSA4MC40MzU2IDU1Ljc1NzdDODAuNDM1NiA1Ni4wOTc1IDgwLjE2MTYgNTYuMzcyOSA3OS44MjM0IDU2LjM3MjlINjEuMTc3MUM2MC44MzkgNTYuMzcyOSA2MC41NjQ5IDU2LjA5NzUgNjAuNTY0OSA1NS43NTc3QzYwLjU2NDkgNTUuNDE3OSA2MC44MzkgNTUuMTQyNCA2MS4xNzcxIDU1LjE0MjRaTTYxLjQwNjggNzAuMDc0N0g1NS42MDlDNTUuMjcwOSA3MC4wNzQ3IDU0Ljk5NjggNjkuNzk5MiA1NC45OTY4IDY5LjQ1OTRDNTQuOTk2OCA2OS4xMTk2IDU1LjI3MDkgNjguODQ0MiA1NS42MDkgNjguODQ0Mkg2MS40MDY4QzYxLjc0NDkgNjguODQ0MiA2Mi4wMTkgNjkuMTE5NiA2Mi4wMTkgNjkuNDU5NEM2Mi4wMTkgNjkuNzk5MiA2MS43NDQ5IDcwLjA3NDcgNjEuNDA2OCA3MC4wNzQ3Wk04NS4zOTIzIDcwLjA3NDdINzkuNTkzOEM3OS4yNTU3IDcwLjA3NDcgNzguOTgxNiA2OS43OTkyIDc4Ljk4MTYgNjkuNDU5NEM3OC45ODE2IDY5LjExOTYgNzkuMjU1NyA2OC44NDQyIDc5LjU5MzggNjguODQ0Mkg4NS4zOTIzQzg1LjczMDQgNjguODQ0MiA4Ni4wMDQ1IDY5LjExOTYgODYuMDA0NSA2OS40NTk0Qzg2LjAwNDUgNjkuNzk5MiA4NS43MzA0IDcwLjA3NDcgODUuMzkyMyA3MC4wNzQ3Wk04NS4zOTIzIDY2LjEyMDNMNTUuNjA4NyA2Ni4xMTk5QzU1LjI3MDYgNjYuMTE5OSA1NC45OTY1IDY1Ljg0NDUgNTQuOTk2NSA2NS41MDQ3QzU0Ljk5NjUgNjUuMTY0OCA1NS4yNzA2IDY0Ljg4OTQgNTUuNjA4NyA2NC44ODk0SDg1LjM5MjNDODUuNzMwNCA2NC44ODk0IDg2LjAwNDUgNjUuMTY0OCA4Ni4wMDQ1IDY1LjUwNDdDODYuMDA0NSA2NS44NDQ1IDg1LjczMDQgNjYuMTE5OSA4NS4zOTIzIDY2LjExOTlWNjYuMTIwM1pNODUuMzkyMyA2Mi4xNjU5TDU1LjYwODcgNjIuMTY1NUM1NS4yNzA2IDYyLjE2NTUgNTQuOTk2NSA2MS44OTAxIDU0Ljk5NjUgNjEuNTUwMkM1NC45OTY1IDYxLjIxMDQgNTUuMjcwNiA2MC45MzUgNTUuNjA4NyA2MC45MzVIODUuMzkyM0M4NS43MzA0IDYwLjkzNSA4Ni4wMDQ1IDYxLjIxMDQgODYuMDA0NSA2MS41NTAyQzg2LjAwNDUgNjEuODkwMSA4NS43MzA0IDYyLjE2NTUgODUuMzkyMyA2Mi4xNjU1VjYyLjE2NTlaIiBmaWxsPSJibGFjayIvPgo8L3N2Zz4K">
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
                                            <td width="50%" height="40" style="border-bottom: 1px solid #424242; text-align: right">$name</td>
                                        </tr>
                                        <tr style="padding: 0 30px">
                                            <td width="50%" height="40" style="border-bottom: 1px solid #424242">Телефон</td>
                                            <td width="50%" height="40" style="border-bottom: 1px solid #424242; text-align: right">$phone</td>
                                        </tr>
                                        <tr style="padding: 0 30px">
                                            <td width="50%" height="40">E-mail</td>
                                            <td width="50%" height="40" style="text-align: right">$mail</td>
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
                                            <td width="50%" height="40" style="border-bottom: 1px solid #424242; text-align: right">$numberCert</td>
                                        </tr>
                                        <tr style="padding: 0 30px">
                                            <td width="50%" height="40">Кошелек</td>
                                            <td width="50%" height="40" style="text-align: right">$wallet</td>
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
</table>
HTML;
}


//foreach ($data['dataForm'] as $key => $value) {
//    $body .= "
//        <div>
//            <span>$key:</span>
//            <span>$value</span>
//        </div>";
//}
