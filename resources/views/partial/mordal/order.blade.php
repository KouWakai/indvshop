            <div class="modal fade" id="ShowUserModal-{{ $ord->id }}" tabindex="-1" role="dialog" aria-labelledby="ShowUserModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ShowPrdModalLabel">注文詳細</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <?php
                        $order = App\Models\Order::with('product')->find($ord->id);
                        ?>
                            <div class="row">
                                <label class="col-md-4 font-weight-bold">注文者名</label>
                            </div>
                            <div class="row">
                                <span class="offset-1">{{ $ord->user->name　?? $ord->username }}</span>
                            </div>
                            <div class="row">
                                <label class="col-md-4 font-weight-bold">Eメールアドレス</label>
                            </div>
                            <div class="row">
                                <span class="offset-1">{{ $ord->email }}</span>
                            </div>
                            <div class="row">
                                <label class="col-md-4 font-weight-bold">住所</label>
                            </div>
                            <div class="row">
                                <span class="offset-1">{{ $ord->prefecture }}{{ $ord->address1 }}{{ $ord->address2 }}{{ $ord->address3 }}</span>
                            </div>
                            <div class="row">
                                <label class="col-md-4 font-weight-bold">電話番号</label>
                            </div>
                            <div class="row">
                                <span class="offset-1">{{ $ord->phone }}</span>
                            </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    </div>
                </div>
                </div>
            </div>





            <div class="modal fade" id="ShowPrdModal-{{ $ord->id }}" tabindex="-1" role="dialog" aria-labelledby="ShowPrdModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ShowPrdModalLabel">注文詳細</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <?php
                        $order = App\Models\Order::with('product')->find($ord->id);
                        ?>
                        @foreach ($order->product as $ord)
                            <div class="row">
                                <label class="col-md-4 font-weight-bold">商品{{ $loop->iteration }}</label>
                            </div>
                            <div class="row">
                                <span class="offset-1">{{ $ord->caption }}</span>
                            </div>
                            <div class="row">
                                <label class="col-md-4 font-weight-bold">数量</label>
                            </div>
                            <div class="row">
                                <span class="offset-1">{{ $ord->pivot->quantity }}</span>
                            </div>
                            <div class="row">
                                <label class="col-md-4 font-weight-bold">単価</label>
                            </div>
                            <div class="row">
                                <span class="offset-1">{{ $ord->price }}円</span>
                            </div>
                        @endforeach


                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    </div>
                </div>
                </div>
            </div>