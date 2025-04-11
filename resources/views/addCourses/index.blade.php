<x-app-layout>
<div>
    <table>
        <th>

        </th>
        <tbody>
            @foreach($paths as course)
            <tr>
                <td>
                {{ course->name }}
            </td>
            <td></td>
            </tr>
        </tbody>
    </table>

@
    <table>

    </table>
</div>
</x-app-layout>
