@extends('layout.master')
@section('title','Rekap Data')
@section('heading','Rekap Data')
@section('gambar','rekap.png')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pertanyaan WR I</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $td_wr1 }}/{{$tq_wr1}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pertanyaan WR II</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $td_wr2 }}/{{ $tq_wr2 }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pertanyaan WR III</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $td_wr3 }}/{{ $tq_wr3 }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pertanyaan WR IV</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $td_wr4 }}/{{ $tq_wr4 }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('rekap')
<br><br>
        <div class="card shadow mb-4">
            <div class="card-header col-md-12 text-center">
                <h6 class="m-0 font-weight-bold text-primary">Total Data Yang Sudah Terisi</h6>
            </div>
            <div class="card-body">
                <h4 class="small font-weight-bold">WR I <span class="float-right">{{ $td_wr1/$tq_wr1*100 }}%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $td_wr1/$tq_wr1*100 }}%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">WR II <span class="float-right">{{ $td_wr2/$tq_wr2*100 }}%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $td_wr2/$tq_wr2*100 }}%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">WR III <span class="float-right">{{ $td_wr3/$tq_wr3*100 }}%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: {{ $td_wr3/$tq_wr3*100 }}%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">WR IV <span class="float-right">{{ $td_wr4/$tq_wr4*100 }}%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: {{ $td_wr4/$tq_wr4*100 }}%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
@endsection
@section('statistik')
<script>
      window.onload = function () {

      //Better to construct options first and then pass it as a parameter
      var options = {
        title: {
          text: "Grafik"              
        },
        data: [              
        {
          // Change type to "doughnut", "line", "splineArea", etc.
          type: "column",
          dataPoints: [
            { label: "Dokumen",  y: {{$tot_dokumen}}  },
            { label: "Gambar/Foto", y: {{$tot_gambar}}  },			
            { label: "Keterangan", y: {{$tot_keterangan}}  }
          ]
        }
        ]
      };

      $("#chartContainer").CanvasJSChart(options);
      }
</script>
<br><br>
        <div class="card shadow mb-4">
            <div class="card-header col-md-12 text-center">
                <h6 class="m-0 font-weight-bold text-primary">Total Data Yang Sudah Terisi Dokumen dan Foto</h6>
            </div>
            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
        </div>
@endsection