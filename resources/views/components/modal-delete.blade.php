@push('modal')
  <!-- Modal -->
    <div class="modal fade" id="modalDelete" tabindex="1" role="dialog" aria-labelledby="modalDelete" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><i class="fas fa-trash"></i> Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                Sure it will be deleted?
                <form action="#" method="post" id="formDelete">
                    @method('DELETE')
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary btn-delete">Yes, Delete !</button>
            </div>
        </div>
        </div>
    </div>
@endpush

@push('js')

<script>
    $(function(){
        $('button.delete').click(function(){
            let url = $(this).attr('data-url');
            $('#formDelete').attr('action', url);
            $('#modalDelete').modal('show');
        });
        $('button.btn-delete').click(function(){
            $('#formDelete').submit();
        });
    });
</script>

@endpush
