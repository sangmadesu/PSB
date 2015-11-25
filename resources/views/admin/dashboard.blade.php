@extends('admin.layout.master')

@section('content')
<div class="main-header">Dashboard</div>
	<hr>
        <div class="status-bar">
            <div class="row">
                <div class="col-md-4">
                    <div class="status" style="background-color: #ff871c">
                        <div class="status-header">
                            <h1>PSB Status</h1>
                            <h2>Admin online</h2>
                        </div>
                        <div class="status-desc">
                            <a href="">Adiyatma</a>
                            <a href="">Rivai</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="status" style="background-color: #56c7e7">
                        <div class="status-header">
                            <h1>Boradcast</h1>
                            <h3>18</h3>
                        </div>
                        <div class="status-desc">
                            <a href="">Pembukaan Pendataran</a>
                            <a href="">Pengumuman Kepala Sekolah</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="status" style="background-color: #e62945">
                        <div class="status-header">
                            <h1>Applicant</h1>
                            <h3></h3>
                        </div>
                        <div class="status-desc">
                            <a href="">Accepted</a>
                            <a href="">Rejected</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="quick">
            <div class="row">
                <div class="col-md-4">
                   <div class="latest-applicant">
                       <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Latest Applicant</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                   </div>
                    
                </div>
                <div class="col-md-8">
                    <div class="quick-broadcast">
                       <h3>Quick Broadcast</h3>
                        <form action="">
                            <input type="text" placeholder="Title">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection