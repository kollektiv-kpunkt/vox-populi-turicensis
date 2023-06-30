<div class="cpt-initial-signers">
    @foreach (__("vpt.letter.initialSigners") as $name => $position)
        <span><b>{{$name}}</b> ({{$position}})</span>
        @if (!$loop->last)
            <br>
        @endif
    @endforeach
</div>
