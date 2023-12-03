@extends('layouts.main')

@section('harga')
<!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>

    <!-- Content wrapper -->
<div class="content-wrapper mb-4">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h2 class="py-3 mb-4 text-center"><span class="text-muted fw-light"></span> Tabel Harga</h2>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Produk</th>
                            <th>Negara Tujuan</th>
                            <th>Harga Ekspor (USD)</th>
                            <th>Berat (kg)</th>
                            
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>1</td>
                            <td>Pupuk Organik</td>
                            <td>United States</td>
                            <td>50</td>
                            <td>5</td>
                            <td>
                                
                            </td>
                        </tr>
                        <!-- Tambahkan baris sesuai dengan data lainnya -->
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
        </div>
        <!-- Content wrapper -->
    </div>
</div>
<div class="corpyright text-center mb-4">
                <span>&copy; Corpytight 2016 Suka Ekspor</span><br>
                <span>Anything Is Possible</span>
              </div>
  
@endsection
