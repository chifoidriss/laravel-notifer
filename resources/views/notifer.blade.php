<style>
    .notify-alert, .smiley-alert, .connectify-alert, .emoticon-alert { z-index: {{ config('notifer.z-index') }}; }
</style>
@if (session()->has('notifer.message'))

    @if (session()->get('notifer.model') === 'toast')
        <div class="notify-alert notify-{{ session()->get('notifer.type') }}- {{ config('notifer.theme') }} animated {{ config('notifer.animate.in_class') }}" style="border-color: {{ config('notifer.color.'.session()->get('notifer.type')) }};" role="alert">
            <div class="notify-alert-icon" style="background-color: {{ config('notifer.color.'.session()->get('notifer.type')) }};">
                <i class="{{ config('notifer.icon.toast.'.session()->get('notifer.type')) }}"></i>
            </div>
            <div class="notify-alert-text">
                <h4>{{ session()->get('notifer.title') ? (session()->get('notifer.title')) : (session()->get('notifer.type')) }}</h4>
                <p>{!! (session()->get('notifer.message')) !!}</p>
            </div>
            <div class="notify-alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="{{ config('notifer.icon.close') }}"></i></span>
                </button>
            </div>
        </div>
    @endif

    @if (session()->get('notifer.model') === 'smiley')
        <div class="smiley-alert smiley-{{ session()->get('notifer.type') }} {{ config('notifer.theme') }} animated {{ config('notifer.animate.in_class') }}" role="alert">
            <div class="smiley-icon">
                <span>
                    <i class="{{ config('notifer.icon.toast.'.session()->get('notifer.type')) }}"></i>
                </span>
            </div>
            <div class="smiley-text">
                <p>
                    <span class="title">{{ (session()->get('notifer.type')) }}!</span>
                    {!! (session()->get('notifer.message')) !!}
                </p>
            </div>
            <div class="smiley-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="{{ config('notifer.icon.close') }}"></i></span>
                </button>
            </div>
        </div>
    @endif

    @if (session()->get('notifer.model') === 'connect')
        <div class="connectify-alert connectify-{{ session()->get('notifer.type') }} {{ config('notifer.theme') }} animated {{ config('notifer.animate.in_class') }}" role="alert">
            <div class="connectify-icon">
                <i class="flaticon-like"></i><span>{{ session()->get('notifer.type') }}</span>
            </div>
            <div class="connectify-text">
                <h4>{{ (session()->get('notifer.title')) }}</h4>
                <p>{!! (session()->get('notifer.message')) !!}</p>
            </div>
            <div class="connectify-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="{{ config('notifer.icon.close') }}"></i>
                    </span>
                </button>
            </div>
        </div>
    @endif

    @if (session()->get('notifer.model') === 'emotify')
        <div class="emoticon-alert emoticon-{{ session()->get('notifer.type') }} animated {{ config('notifer.animate.in_class') }}" role="alert">
            <div class="emoticon-icon"><span></span></div>
            <div class="emoticon-text">
                <p>{!! (session()->get('notifer.message')) !!}</p>
            </div>
            <div class="emoticon-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="{{ config('notifer.icon.close') }}"></i></span>
                </button>
            </div>
        </div>
    @endif
@endif

<script>
    var notify = {
        timeout: "{{ config('notifer.animate.timeout') }}",
        animatedIn: "{{ config('notifer.animate.in_class') }}",
        animatedOut: "{{ config('notifer.animate.out_class') }}",
        position: "{{ config('notifer.position') }}"
    }
</script>

{{ session()->forget('notifer.message') }}

