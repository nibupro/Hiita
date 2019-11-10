@extends('layouts.app')

@section('content')

<div class="container">
    <div class="text-center">
        {{ $year }} / {{ $month }}
    </div>
    <table class="table table-bordered table-sm">
        <thead>
        <tr>
            @foreach ($weeks as $jaDayOfWeek => $enDayOfWeek)
            <th class="{{ $enDayOfWeek }} text-center bg-white">{{ $jaDayOfWeek }}</th>
            @endforeach
        </tr>
        </thead>
        <div class="row text-center">
            <a class="col" href="?Ym={{ $lastYearMonth }} ">前月</a>
            <a class="col" href="calendar">今月</a>
            <a class="col" href="?Ym={{ $nextYearMonth }} ">次月</a>
        </div>
            
        <tbody>
            <tr>
                <!-- 先月の部分 -->
                @foreach ($lastMonthDays as $value)
                <td class="bg-white"></td>
                @endforeach

                <!-- 今月 -->
                @foreach ($days as $key => $value)
                    
                    @if ($value == 7)
                        <!-- TODO:$keyと練習した日が一緒なら色を変える -->
                        <td  class="bg-white text-center">
                            <a href="/dashboard?Ymd={{ $year }}-{{ $month }}-{{ $key + 1 }}">
                                {{ $key + 1 }}
                            </a>

                            <div class="small">
                                <!-- TODO:矢数 -->
                                <br>
                                <!-- TODO:的中数 -->
                            </div>
                        </td>
                        </tr>
                    @else
                        <td  class="bg-white text-center">
                            <a href="/dashboard?Ymd={{ $year }}-{{ $month }}-{{ $key + 1 }}">
                                {{ $key + 1 }}
                            </a>
                            <div class="small">
                                <!-- TODO:矢数 -->
                                <br>
                                <!-- TODO:的中数 -->
                            </div>
                        </td>
                    @endif
                @endforeach

                <!-- 次月 -->
                @for ($i = 0; $i < $nextMonthDays; $i++)
                <td  class="bg-white"></td>
                @endfor

            </tr>
        </tbody>
    </table>
 
</div>

@endsection