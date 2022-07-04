@extends('admin.includes.front-app')

@include('admin.includes.header')

@section('container')
    <div class="adminPanel__content">
        <div class="row">
            <div class="col-md-6 col-lg-4 ">
                <div class="form-group">
                    <input type="text" autocomplete="on" class="form-control" placeholder="Все курьеры">
                    <div class="form-control-icon">
                        <div class="arrow"></div>
                        <div style="display: none" class="clean"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 ">
                <div class="form-group">
                    <select class="form-control select2">
                        <option>Все кухни</option>
                        @foreach ($kitchens['organizations'] as $kitchen)
                            <option value="{{ $kitchen['id'] }}">{{ $kitchen['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-12 col-lg-4  text-right">
                <a href="#" class="btn-addCourier"><span class="add-ic"></span>Добавить курьера</a>
            </div>
            <div class="col-12 ">
                <div class="form-group">
                    <input type="checkbox" checked class="form-check-input" id="show-deleted">
                    <label class="form-check-label" for="show-deleted">Показать удаленные</label>
                </div>
            </div>
            <div class="col-12">
                <div class="table-scroll">
                    <table>
                        <thead>
                        <tr>
                            <th>ФИО</th>
                            <th>Кухня</th>
                            <th>Тип</th>
                            <th>Статус</th>
                            <th>Договор</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($couriers as $courier)
                                <tr>
                                    <td data-th="ФИО">
                                        <a href="#" class="abs-link"></a>
                                        {{ $courier['displayName'] }}
                                    </td>
                                    <td data-th="Кухня">{{ $courier['kitchen'] }}</td>
                                    <td data-th="Тип">авто</td>
                                    <td data-th="Статус" class="active">активен</td>
                                    {{-- <td data-th="Договор">Договор №2/10 от 25.10.2021</td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop

@include('admin.includes.footer')
