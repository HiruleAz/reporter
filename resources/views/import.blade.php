
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Import Excel Data into Database in Laravel 10</h4>
                    </div>
                    <div class="card-body">
    
                        <form action="{{ url('import') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="input-group">
                                <input type="text" name="idname" class="form-control" placeholder="Enter Station Name" />
                                <input type="file" name="import_file" class="form-control" />
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>

                        </form>

                        <hr>

                        <table class="table table-bordered border-1">
                            <thead>
                                <tr>
                                    <th>Entry No.</th>
                                    <th>Station ID</th>
                                    <th>Sample No.</th>
                                    <th>Gas Type</th>
                                    <th>CEMS</th>
                                    <th>O2</th>
                                    <th>H2O</th>
                                    <th>SCEMS</th>
                                    <th>SRM</th>
                                    <th>O2</th>
                                    <th>H2O</th>
                                    <th>SSRM</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($entries as $entry)
                                <tr>
                                    <td>{{$entry->entryno}}</td>
                                    <td>{{$entry->idno}}</td>
                                    @if (!$entry->sampleno == null)
                                        <td>{{$entry->sampleno}}</td>
                                    @else
                                        <td>not used</td>
                                    @endif
                                    <td>{{$entry->gastype}}</td>
                                    <td>{{$entry->cemsmg}}</td>
                                    <td>{{$entry->cemsO2}}</td>
                                    <td>{{$entry->cemsH2O}}</td>\
                                    <td>{{$entry->scems}}</td>
                                    <td>{{$entry->srmmg}}</td>
                                    <td>{{$entry->srmO2}}</td>
                                    <td>{{$entry->srmH2O}}</td>
                                    <td>{{$entry->ssrm}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
