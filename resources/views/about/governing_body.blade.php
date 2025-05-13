@extends('layouts.app')

@section('content')

<style>
    .governing-body {
        padding: 120px 20px;
        background: linear-gradient(to bottom right, #f0f9ff,rgb(254, 224, 224));
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .section-title {
        text-align: center;
        font-size: 36px;
        font-weight: 800;
        color:rgb(158, 27, 27);
        margin-bottom: 30px;
        position: hidden;
    }

    .section-title::after {
        content: '';
        display: block;
        width: 80px;
        height: 4px;
        background-color: #0D8ABC;
        margin: 10px auto 0;
        border-radius: 2px;
    }

    .tab-container {
        display: flex;
        max-width: 1200px;
        margin: auto;
        gap: 30px;
        flex-wrap: wrap;
    }

    .nav-pills .nav-link {
        border-radius: 0;
        color:rgb(155, 36, 36);
        font-weight: 600;
        padding: 15px 20px;
        border-left: 3px solid transparent;
    }

    .nav-pills .nav-link.active {
        background-color: #ffffff;
        /* background-color: rgb(254, 137, 137); */
        border-left: 3px solid #0D8ABC;
        color:rgb(155, 36, 36);
    }

    .table_heading {
        color:rgb(188, 13, 13);
        font-weight: 600;
        text-align: center;
    }
    .tab-content {
        flex: 1;
        min-width: 280px;
        background-color: #ffffff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    .nav.flex-column {
        min-width: 250px;
        background:rgb(254, 254, 254);
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
        height: fit-content;
    }
</style>

<div class="governing-body">
    <div class="section-title">Governing Body & Members</div>

    <div class="tab-container">
        <!-- Left: Tabs -->
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-list-tab" data-bs-toggle="pill" data-bs-target="#v-pills-list" type="button" role="tab">List of Members</button>
            <button class="nav-link" id="v-pills-non-teaching-tab" data-bs-toggle="pill" data-bs-target="#v-pills-non-teaching" type="button" role="tab">Non-Teaching Staff</button>

        </div>

        <!-- Right: Tab Content -->
        <div class="tab-content" id="v-pills-tabContent">

            <!-- Members Table -->
            <div class="tab-pane fade show active" id="v-pills-list" role="tabpanel">
                @php
                    $members = [
                        ['name' => 'Shri. Sudhir K. Patil', 'role' => 'President'],
                        ['name' => 'Shri. Vithalrao B. Padwal', 'role' => 'Vice President'],
                        ['name' => 'Sau. Prema S.Patil', 'role' => 'General Secretary'],
                        ['name' => 'Shri. Aditya S.Patil', 'role' => 'Member (CEO)'],
                        ['name' => 'Shri. Santosh S.Kulkarni', 'role' => 'Member'],
                        ['name' => 'Shri. Vijaysinh A. Thorat', 'role' => 'Member'],
                        ['name' => 'Shri. Bajirao G. Jadhav', 'role' => 'Member'],
                        ['name' => 'Shri. Udaysinh V. Raje', 'role' => 'Member'],
                        ['name' => 'Shri. Fulchand L.Gade', 'role' => 'Member'],
                        ['name' => 'Shri. Keshav K.Jadhav', 'role' => 'Member'],
                        ['name' => 'Shri. Mahesh M. Shinde', 'role' => 'Member'],
                    ];
                @endphp

                <table class="table table-bordered table-striped">
                    <thead class="table-warning">
                        <tr>
                            <th>Sl. No.</th>
                            <th>Name</th>
                            <th>Designation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $index => $member)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $member['name'] }}</td>
                                <td>{{ $member['role'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-non-teaching" role="tabpanel">
                <h2 class=" table_heading ">Non-Teaching Staff Members</h2>
                <table class="table table-bordered table-striped">
                    <thead class="table-warning">
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name of The Non-Teaching Staff</th>
                            <th>Designation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $nonTeaching = [
                                ['name' => 'Mr. Andhalkar S.D', 'designation' => 'Office Superintendent'],
                                ['name' => 'Mr. Birajdar S.N', 'designation' => 'Accountant'],
                                ['name' => 'Mrs. Gholap S.D', 'designation' => 'Librarian'],
                                ['name' => 'Mr. Bhonde S.D', 'designation' => 'Sr. Clerk'],
                                ['name' => 'Mr. Kharade O.M', 'designation' => 'Clerk'],
                                ['name' => 'Mr. Gaikwad K.', 'designation' => 'Clerk'],
                                ['name' => 'Mr. Munde Y.B', 'designation' => 'Clerk'],
                                ['name' => 'Mr. Khodwe M.M', 'designation' => 'Lab Technician'],
                                ['name' => 'Mr. Gandhale G.R', 'designation' => 'Lab Technician'],
                                ['name' => 'Mr. Shingare S.S', 'designation' => 'Peon'],
                                ['name' => 'Mr. Khot A.M', 'designation' => 'Peon'],
                                ['name' => 'Mr. Dhekane R.', 'designation' => 'Peon'],
                                ['name' => 'Mr. Shendage M.A', 'designation' => 'Peon'],
                            ];
                        @endphp

                        @foreach ($nonTeaching as $index => $staff)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $staff['name'] }}</td>
                                <td>{{ $staff['designation'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
