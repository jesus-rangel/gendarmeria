<tr>
  <td class="header">
    <a href="{{ $url }}" style="display: inline-block;">
      @if (trim($slot) === 'Círculo de Suboficiales de la Gendarmería Nacional')
      <img src="{{asset('img/circle-shield.png')}}" 
        class="logo" 
        alt="Círculo de Suboficiales de la Gendarmería Nacional"
      >
      @else
      {{ $slot }}
      @endif
    </a>
  </td>
</tr>
