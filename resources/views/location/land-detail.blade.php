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
                {{-- Land --}}
                <h2>Nearest Land Farm Location</h2><br>
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Location</th>
                            <th>Owner</th>
                            <th>Contact</th>
                            <th>Surface Area</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td> {{ $item->address }} </td>
                            <td> {{ $item->owner }} </td>
                            <td> {{ $item->contact }} </td>
                            <td> {{ $item->surface_area }} </td>
                            <td><a href="butchery-detail" class="btn btn-primary">See More</a></td>

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