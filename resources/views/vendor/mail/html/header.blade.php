@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
            <img src="https://www.pngmart.com/files/19/Heart-Lifeline-PNG-Image.png" class="logo" alt="Logo">
            @else
            {{ $slot }}
            @endif
        </a>
    </td>
</tr>