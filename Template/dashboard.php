<h1>{{ message }}</h1>
<hr>
<br><br>
<table class="table">
    <thead>
        <th>Subject</th>
        <th>Fees</th>
    </thead>
    <tbody>
        <tr ng-repeat="sub in subject">
            <td>{{ sub.name }}</td>
            <td>{{ sub.fees }}</td>
        </tr>
    </tbody>
</table>