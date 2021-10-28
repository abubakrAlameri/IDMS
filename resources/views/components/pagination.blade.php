 @props(['items'])
 @if($items->haspages())
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        @if ($items->onFirstPage())
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{$items->previousPageUrl()}}">Previous</a></li>
                        @endif
                      

                        @for($i = 1; $i <= $items->lastPage(); $i++)
                            @if ($i == $items->currentPage())
                                <li class="page-item active"><a class="page-link" href="{{$items->Url($i)}}">{{$i}}</a></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{$items->Url($i)}}">{{$i}}</a></li>
                            @endif
            
                        @endfor
                  

                        @if ($items->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{$items->nextPageUrl()}}">Next</a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Next</a>
                            </li>
                        @endif
                    </ul>
                </nav>
                @endif