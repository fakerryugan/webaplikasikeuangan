@extends('users.layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <div class="max-w-[480px] mx-auto bg-white min-h-screen pb-24 relative overflow-x-hidden">

            <div class="text-white px-4 py-6 rounded-b-3xl"
                style="background: linear-gradient(to bottom right, #00C94D 50%, #00A73A 50%);">
                <div class="flex items-center justify-between mb-6">

                    <div class="flex items-center space-x-3">
                        <div class="flex items-center justify-center p-2">
                            <img src="{{ asset('images/logo1.png') }}" alt="Logo" class="w-10 h-10 object-contain">
                        </div>
                        <div>
                            <h1 class="text-lg font-bold leading-tight">Catet Dulu</h1>
                            <p class="text-sm text-green-100">Analisis keuangan</p>
                        </div>
                    </div>

                    <button
                        class="flex items-center bg-white/20 hover:bg-white/30 text-sm rounded-xl px-3 py-1.5 transition">
                        IDR
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                </div>

                <div class="w-full h-[100px]">
                    <div class="flex items-center justify-between">
                        <div class="flex w-fit items-center bg-[#01C94D] overflow-hidden rounded-lg">
                            <button class="px-6 py-2 bg-white text-green-700 font-semibold text-sm shadow-md transition">
                                Bulan
                            </button>
                            <button class="px-6 py-2 text-white font-semibold text-sm transition hover:bg-white/10">
                                Tahun
                            </button>
                            <button class="px-6 py-2 text-white font-semibold text-sm transition hover:bg-white/10">
                                All Time
                            </button>
                        </div>

                        <button
                            class="flex items-center bg-white/20 hover:bg-white/30 text-sm rounded-xl px-3 py-1.5 text-white transition">
                            bulan
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="-mt-16 flex h-full w-full flex-1 flex-col gap-4 rounded-xl px-4 sm:px-6">
                <div class="grid grid-cols-2 gap-4">
                    <!-- Kartu Pemasukan -->
                    <div
                        class="flex items-center space-x-3 rounded-2xl bg-gradient-to-br from-[#00C94D] to-[#00A73A] p-4 border border-white/20 shadow-[0_4px_12px_rgba(0,0,0,0.15)] transition-transform duration-300 hover:scale-[1.02]">

                        <div class="flex-shrink-0">
                            <svg width="44" height="70" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M41.76 9.8C37.54 5.25 31.54 2.5 25 2.5C12.57 2.5 2.5 12.57 2.5 25C2.5 37.42 12.57 47.5 25 47.5C37.42 47.5 47.5 37.42 47.5 25"
                                    fill="white" />
                                <path d="M25 32V17M25 17L20 22M25 17L30 22" stroke="#10B981" stroke-width="3"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <div>
                            <p class="text-base font-medium text-white/95">Pemasukan</p>
                            <p class="text-lg font-bold text-white">Rp 5.000.000</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center space-x-3 rounded-2xl bg-gradient-to-br from-[#F4313C] to-[#C40000] p-4 border border-white/20 shadow-[0_4px_12px_rgba(0,0,0,0.15)] transition-transform duration-300 hover:scale-[1.02]">

                        <div class="flex-shrink-0">
                            <svg width="44" height="70" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M41.76 9.8C37.54 5.25 31.54 2.5 25 2.5C12.57 2.5 2.5 12.57 2.5 25C2.5 37.42 12.57 47.5 25 47.5C37.42 47.5 47.5 37.42 47.5 25"
                                    fill="white" />
                                <path d="M25 32V17M25 17L20 22M25 17L30 22" stroke="#10B981" stroke-width="3"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <div>
                            <p class="text-base font-medium text-white/95">Pengeluaran</p>
                            <p class="text-lg font-bold text-white">Rp 5.000.000</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="bg-white rounded-t-3xl pt-3">
                <div class="flex w-full flex-1 flex-col gap-4 rounded-xl px-4 sm:px-6">
                    <div
                        class="rounded-2xl bg-gradient-to-br from-[#00C94D] to-[#00A73A] p-4 text-white shadow-xl shadow-black/20">

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

                <div class="px-4 sm:px-6 pt-3">
                    <h2 class="text-base font-semibold text-gray-800 mb-1">Analisis Keuangan</h2>
                    <p class="text-sm text-gray-500 mb-4">Metrik keuangan detail untuk Oktober 2025</p>
                </div>

                <div class="px-4 sm:px-6 pb-10">
                    <div class="rounded-xl border border-gray-200 bg-white divide-y divide-gray-100 overflow-hidden">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="flex items-center justify-between px-4 py-3 hover:bg-gray-50 transition">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19 5c-1.5 0-2.8 1.4-3 2-3.5-1.5-11-.3-11 5 0 1.8 0 3 2 4.5V20h4v-2h3v2h4v-4c1-.5 1.7-1 2-2h2v-4h-2c0-1-.5-1.5-1-2V5z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-800">Target Tabungan Minimum</p>
                                        <p class="text-xs text-gray-500">Minimal 30% dari pendapatan</p>
                                    </div>
                                </div>
                                <span class="text-sm font-semibold text-red-600">0%</span>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection