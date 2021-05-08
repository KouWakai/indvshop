            <div class="modal fade" id="ShowModal-{{ $cnt->id }}" tabindex="-1" role="dialog" aria-labelledby="ShowModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ShowModalLabel">お問い合わせ詳細</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    $cnt = App\Models\Contact::find($cnt->id);
                    ?>
                        <div class="row">
                            <label class="col-md-4 font-weight-bold">備考</label>
                        </div>
                        <div class="row">
                            <span class="offset-1">{{ $cnt->description }}</span>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    </div>
                </div>
            </div>