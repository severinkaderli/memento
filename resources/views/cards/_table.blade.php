<!-- Cards Table -->
<div class="table-wrapper">
    <table id="cardsTable" data-cardpackid="{{$cardpack -> id}}" class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-cell mdl-cell--12-col mdl-shadow--2dp full-width">
        <thead>
        <tr class="card-row">
            <th class="mdl-data-table__cell--non-numeric">Frontside</th>
            <th class="mdl-data-table__cell--non-numeric">Backside</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cardpack -> cards as $card)
            <tr class="card-row" data-id="{{ $card -> id }}">
                <td class="mdl-data-table__cell--non-numeric">{{$card -> frontside}}</td>
                <td class="mdl-data-table__cell--non-numeric">{{$card -> backside}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="{{ URL::asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{ URL::asset('js/material.min.js')}}"></script>