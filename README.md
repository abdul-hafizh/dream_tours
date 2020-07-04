# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Project DOC

## 1. Login (POST)
Link : http://abdulhafizh.com/api/dream/public/login
Body :
{
    "nama_jamaah": "hafizh",
    "password": "qwerty"
}
Response :
{
"message": "berhasil_login",	
"user": "hafizh",
"code": 200,
"result": {
"token": "QsAB0FdZZvKso779Gra2624q0dU5scYVfmsIkP1LF2l40E7CklKJHmxVMTSJl5JsUmnVDV6HAXS9qUhu"
}
}

## 2. Semua Data (GET)
Link : http://abdulhafizh.com/api/dream/public/semua_data?token=QsAB0FdZZvKso779Gra2624q0dU5scYVfmsIkP1LF2l40E7CklKJHmxVMTSJl5JsUmnVDV6HAXS9qUhu 
Response : 
{
"message": "list_jamaah",
"results": [
{
"id": 1,
"nama_jamaah": "hafizh",
"gender": "L",
"telp_jamaah": "001322112123"
},..
]
}   

## 3. Detail Data (GET)
Link : http://abdulhafizh.com/api/dream/public/detail_data/2?token=QsAB0FdZZvKso779Gra2624q0dU5scYVfmsIkP1LF2l40E7CklKJHmxVMTSJl5JsUmnVDV6HAXS9qUhu
Response :
{
"message": "detail_jamaah",
"results": [
    {
        "id": 2,
        "nama_jamaah": "abdul",
        "gender": "L",
        "telp_jamaah": "001322112299"
    }
]
}

## 4. Tambah Data (POST)
Link : http://abdulhafizh.com/api/dream/public/register 
Body :
{
"nama_jamaah": "test2",
"gender": "P",
"telp_jamaah": "081322112290",
"password": "123456"
}   

Response :
{
"message": "berhasil_registrasi",
"code": 201
}

## 5. Edit Data (PATCH)
Link : http://abdulhafizh.com/api/dream/public/edit_data?token=QsAB0FdZZvKso779Gra2624q0dU5scYVfmsIkP1LF2l40E7CklKJHmxVMTSJl5JsUmnVDV6HAXS9qUhu
Body : 
{
"id": 5,
"nama_jamaah": "test2xx",
"gender": "P",
"telp_jamaah": "001422115523"
}

Response :
{
"message": "berhasil_update_data",
"results": {
    "nama_jamaah": "test2xx",
    "gender": "P",
    "telp_jamaah": "001422115523"
},
"code": 200
}

## 6. Hapus Data (DELETE)
Link : http://abdulhafizh.com/api/dream/public/hapus_data/5?token=QsAB0FdZZvKso779Gra2624q0dU5scYVfmsIkP1LF2l40E7CklKJHmxVMTSJl5JsUmnVDV6HAXS9qUhu
Response : 
{
"message": "berhasil_hapus_data"
}

