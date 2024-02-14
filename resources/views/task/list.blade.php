@extends('layout')

@section('list-tasks')
<div class="container flex flex-col gap-2">

    <div class="flex items-center justify-between w-full my-2 min-h-14">
        <div>
            @if(session('success'))
            @include('components.toast.success')
            @elseif(session('error'))
            @include('components.toast.error')
            @endif
        </div>
        <div>
            <a href="/task/create"
                class="items-center px-2 py-3 font-bold text-center transition rounded max-w-32 bg-emerald-700 hover:bg-emerald-600">CREATE
                A
                TASK</a>
        </div>
    </div>

    <div class="overflow-hidden border border-gray-700 rounded-lg shadow-sm ">
        <table class="w-full text-sm leading-5">
            <thead class="bg-slate-800 bg-opacity-90">
                <tr>
                    <th class="px-4 py-3 text-xl font-semibold text-left border-r border-gray-700">Title</th>
                    <th class="px-4 py-3 text-xl font-semibold text-left border-r border-gray-700">Description
                    </th>
                    <th class="px-4 py-3 text-xl font-semibold text-left border-r border-gray-700">Status</th>
                    <th class="px-4 py-3 text-xl font-semibold text-left ">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr class="border-b border-gray-700">
                    <td class="px-4 py-3 text-lg font-normal text-left border-r border-gray-700">
                        {{$task->title}}</td>
                    <td class="px-4 py-3 text-lg font-normal text-left border-r border-gray-700">{{$task->description}}
                    </td>
                    <td class="px-2 py-3 text-base font-normal text-left border-r border-gray-700">
                        {{$task->status}}</td>

                    <td class="flex justify-center gap-4 py-3 ">
                        <a href="{{route('task.update', $task->id)}}">
                            <button class="p-2 rounded bg-slate-800">
                                <svg width="24px" heigth="24px" viewBox="0 0 24 24" fill="rgb(148, 163, 184)"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.4001 18.1612L11.4001 18.1612L18.796 10.7653C17.7894 10.3464 16.5972 9.6582 15.4697 8.53068C14.342 7.40298 13.6537 6.21058 13.2348 5.2039L5.83882 12.5999L5.83879 12.5999C5.26166 13.1771 4.97307 13.4657 4.7249 13.7838C4.43213 14.1592 4.18114 14.5653 3.97634 14.995C3.80273 15.3593 3.67368 15.7465 3.41556 16.5208L2.05445 20.6042C1.92743 20.9852 2.0266 21.4053 2.31063 21.6894C2.59466 21.9734 3.01478 22.0726 3.39584 21.9456L7.47918 20.5844C8.25351 20.3263 8.6407 20.1973 9.00498 20.0237C9.43469 19.8189 9.84082 19.5679 10.2162 19.2751C10.5343 19.0269 10.823 18.7383 11.4001 18.1612Z" />
                                    <path
                                        d="M20.8482 8.71306C22.3839 7.17735 22.3839 4.68748 20.8482 3.15178C19.3125 1.61607 16.8226 1.61607 15.2869 3.15178L14.3999 4.03882C14.4121 4.0755 14.4246 4.11268 14.4377 4.15035C14.7628 5.0875 15.3763 6.31601 16.5303 7.47002C17.6843 8.62403 18.9128 9.23749 19.85 9.56262C19.8875 9.57563 19.9245 9.58817 19.961 9.60026L20.8482 8.71306Z" />

                                </svg>
                            </button>
                        </a>
                        <a href="">
                            <button class="p-2 rounded bg-slate-800">
                                <svg width="24px" heigth="24px" viewBox="0 0 24 24" fill=" rgb(239, 68, 68)"
                                    xmlns="http://www.w3.org/2000/svg">

                                    <path
                                        d="M2.75 6.16667C2.75 5.70644 3.09538 5.33335 3.52143 5.33335L6.18567 5.3329C6.71502 5.31841 7.18202 4.95482 7.36214 4.41691C7.36688 4.40277 7.37232 4.38532 7.39185 4.32203L7.50665 3.94993C7.5769 3.72179 7.6381 3.52303 7.72375 3.34536C8.06209 2.64349 8.68808 2.1561 9.41147 2.03132C9.59457 1.99973 9.78848 1.99987 10.0111 2.00002H13.4891C13.7117 1.99987 13.9056 1.99973 14.0887 2.03132C14.8121 2.1561 15.4381 2.64349 15.7764 3.34536C15.8621 3.52303 15.9233 3.72179 15.9935 3.94993L16.1083 4.32203C16.1279 4.38532 16.1333 4.40277 16.138 4.41691C16.3182 4.95482 16.8778 5.31886 17.4071 5.33335H19.9786C20.4046 5.33335 20.75 5.70644 20.75 6.16667C20.75 6.62691 20.4046 7 19.9786 7H3.52143C3.09538 7 2.75 6.62691 2.75 6.16667Z" />
                                    <path
                                        d="M11.6068 21.9998H12.3937C15.1012 21.9998 16.4549 21.9998 17.3351 21.1366C18.2153 20.2734 18.3054 18.8575 18.4855 16.0256L18.745 11.945C18.8427 10.4085 18.8916 9.6402 18.45 9.15335C18.0084 8.6665 17.2628 8.6665 15.7714 8.6665H8.22905C6.73771 8.6665 5.99204 8.6665 5.55047 9.15335C5.10891 9.6402 5.15777 10.4085 5.25549 11.945L5.515 16.0256C5.6951 18.8575 5.78515 20.2734 6.66534 21.1366C7.54553 21.9998 8.89927 21.9998 11.6068 21.9998Z" />

                                </svg>
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection