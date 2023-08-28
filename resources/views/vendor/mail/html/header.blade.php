@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="{{ asset('assets/images/logo.png') }}" alt="Rush Holdings Group logo" class="logo_desktop"
                    style="width:auto ; height:46px; margin-left:20px;">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
