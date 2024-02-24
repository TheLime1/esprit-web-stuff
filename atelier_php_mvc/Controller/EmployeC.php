<?php

class EmployeC
{

    function show($employe)
    {

        echo '
            <table border="1">
            <tr>
            <td>Lastname</td>
            <td>Firstname</td>
            <td>Email</td>
            <td>Phone</td>
            </tr>
            <tr>
            <td>' . $employe->getLastName() . '</td>
            <td>' . $employe->getFirstName() . '</td>
            <td>' . $employe->getEmail() . '</td>
            <td>' . $employe->getPhone() . '</td>
            </tr>
            </table>
            ';
    }
}
