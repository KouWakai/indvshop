            <div class="modal fade" id="ShowModal-{{ $ctmord->id }}" tabindex="-1" role="dialog" aria-labelledby="ShowModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ShowModalLabel">見積もり詳細</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    $ctmord = App\Models\Customorder::find($ctmord->id);
                    ?>
                        <div class="row">
                            <label class="col-md-4 font-weight-bold">画像</label>
                        </div>
                        <div class="row">
                            <span class="offset-1"><img src="/storage/{{ $ctmord->image }}" width="300px" height="300px"　alt=""></span>
                        </div>
                        <div class="row">
                            <label class="col-md-4 font-weight-bold">備考</label>
                        </div>
                        <div class="row">
                            <span class="offset-1">{{ $ctmord->description }}</span>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    </div>
                </div>
            </div>