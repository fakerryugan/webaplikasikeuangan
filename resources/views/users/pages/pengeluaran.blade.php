@extends('users.layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <div class="max-w-[480px] mx-auto bg-white min-h-screen pb-24 relative overflow-x-hidden">

            <x-red-header />

            <div class="-mt-16 flex h-full w-full flex-1 flex-col gap-4 rounded-xl px-4 sm:px-6">
                <div class="flex w-full flex-1 flex-col gap-4 rounded-xl px-4 sm:px-6">
                    <div
                        class="rounded-2xl bg-gradient-to-br from-[#F22E3A] to-[#D0152B] p-4 text-white shadow-xl shadow-black/20">

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-white/90">Saldo Total</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white/90" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>

                        <div class="my-3 flex items-center justify-between">
                            <span class="text-3xl font-bold tracking-wider">IDR</span>
                            <span class="text-3xl font-semibold">Rp 0</span>
                        </div>

                        <div class="border-t border-white/30"></div>

                        <div class="mt-3 flex items-center justify-center text-sm text-white/90">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                            <span>+0.0% dari Agustus 2025</span>
                        </div>
                    </div>
                </div>
                <form class="w-full">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>

                        <input type="search" id="default-search"
                            class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-2xl bg-gray-50 focus:ring-green-500 focus:border-green-500"
                            placeholder="Search..." required />


                    </div>
                </form>
                <div class="flex flex-col items-center justify-center text-center p-8">

                    <div class="mb-6">
                        <img src="{{ asset('images/kosong1.png') }}" alt="Belum ada Pengeluaran"
                            class="w-auto h-40 mx-auto">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">
                        Belum ada Pengeluaran
                    </h3>
                    <p class="text-gray-500 max-w-xs">
                        Mulai catat Pengeluaran Anda untuk melacak keuangan dengan lebih baik
                    </p>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection