@extends('layout.layout')

@section('isi')

    <div data-aos="fade-up">

    <section style="height:100%">
    <div class="gradient-custom h-100">
      <div class="mask d-flex align-items-center h-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12">
              <div id="datatable">
                {{-- Butchery --}}
                <h2>Nearest Butchery Location</h2><br>
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Location</th>
                            <th>Owner</th>
                            <th>Contact</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td> {{ $item->address }} </td>
                            <td> {{ $item->owner }} </td>
                            <td> {{ $item->contact }} </td>
                            <td><a href="{{ $item->maps }}" class="btn btn-primary">See Live Location</a></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                </div>
                <!-- AKHIR DATA -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    
    <br><br><br>

  

    

@endsection