@extends('layouts.client.main-account')

@section('title')
    Tổng quan về tài khoản
@endsection

@section('content')
    <h2>Tổng quan về Tài Khoản</h2>
    <h4>Hồ sơ</h4>
    <hr>
    <div class="table-account">
        <table width="100%">
            <tbody>
            <tr>
                <td>
                    <label>Email</label>
                </td>
                <td>
                    <p>huynhthuanvugia@gmail.com</p>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Ngày sinh</label>
                </td>
                <td>
                    <p>27/02/1999</p>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Quốc gia</label>
                </td>
                <td>
                    <p>VN</p>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Giới tính</label>
                </td>
                <td>
                    <p>Nam</p>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Họ</label>
                </td>
                <td>
                    <p>Vũ</p>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Tên</label>
                </td>
                <td>
                    <p>Thuận</p>
                </td>
            </tr>
            </tbody>
        </table>
        <button class="btn btn-dark btn-md">SỬA HỒ SƠ</button>
        <hr>

        <h4 class="mt-2 mb-2">Loại tài khoản</h4>

        <div class="card-user">
            <div class="card-user-name">
                <h2 class="text-white">Thành Viên Thường</h2>
            </div>
            <div class="card-user-info">
                <p>Chơi nhạc, tạo danh sách nhạc cá nhân</p>
                <hr>
            </div>
            <div class="card-user-footer">
                <h3>Miễn phí</h3>
            </div>
        </div>
        <button class="btn btn-primary btn-lg mt-2">NÂNG CẤP LÊN VIP</button>
    </div>
@endsection
