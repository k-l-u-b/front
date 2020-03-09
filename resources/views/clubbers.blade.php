<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>


<i class="fas fa-coins"></i>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Money</th>
                <th scope="col">Anxious | Satisfied</th>
                <th scope="col">Bizarre | Alluring</th>
                <th scope="col">Introvert | Exuberant</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($clubbers as $clubber)
                <tr>
                    <th scope="row">{{$clubber->id}}</th>
                    <td><a href="/clubber/{{$clubber->id}}">{{$clubber->name}}</a></td>
                    <td>{{$clubber->money}}</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: {{($clubber->anxious_satisfied+100)/200*100}}%" aria-valuenow="{{$clubber->bizarre_alluring}}" aria-valuemin="-100" aria-valuemax="100"></div>
                        </div>
                    </td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: {{($clubber->bizarre_alluring+100)/200*100}}%" aria-valuenow="{{$clubber->bizarre_alluring}}" aria-valuemin="-100" aria-valuemax="100"></div>
                        </div>
                    </td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: {{($clubber->introvert_exuberant+100)/200*100}}%" aria-valuenow="{{$clubber->bizarre_alluring}}" aria-valuemin="-100" aria-valuemax="100"></div>
                        </div>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://use.fontawesome.com/ca24b77c86.js"></script>