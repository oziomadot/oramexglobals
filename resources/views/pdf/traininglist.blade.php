<div>
    <x-app-layout>
  @if($traininglist)
  <table class="table-auto w-full">
    <thead >
        <tr >
        <th class="px-2 bg-amber-300">Registration Id</th>
        <th class="px-2 bg-cyan-300">Surname</th>
        <th class="px-2 bg-green-300">First</th>
        <th class="px-2 bg-slate-300">Course</th>
        <th class="px-2 bg-red-300">Certificate</th>
        <th class="px-2 bg-yello-300">Attendance</th>
        <th>Paid</th>
    </tr>
    </thead>
    <tbody>
      @foreach($traininglist as $traininglist)
<tr style=" border-bottom-style: solide; ">
    <td class="px-2 bg-cyan-300">
{{ $traininglist->trainingId }}
    </td>
    <td class="px-2 bg-amber-300">
        {{ $traininglist->surname }}
    </td>
    <td class="px-2 bg-slate-300">
        {{ $traininglist->firstname }}
    </td>
    <td class="px-2 bg-green-300">
        {{ $traininglist->interest->name }}
    </td>
    <td class="px-2 bg-yellow-300">
        @if($traininglist->certificate === 1)
        'Yes' @else 'No' @endif
    </td>
    <td class="px-2 bg-red-300">
        <input type="checkbox">
    </td>
    <td>
        <input type="checkbox" >
    </td>
</tr>
  @endforeach
    </tbody>

  </table>

  @endif
    </x-app-layout>
</div>
