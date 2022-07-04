@section('footer')
<!-- Modal -->
<div class="modal fade" id="are-you-sure" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="modal-title">Вы уверены?</h2>
                <div class="modal-subtitle">
                    Вы потверждаете, что передали заказ клиенту?
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Потверждаю</button>
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Отмена</button>
            </div>
        </div>
    </div>
</div>
@stop
