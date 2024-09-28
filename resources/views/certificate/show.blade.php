<div>
    <div><h1>
        CERTIFICATE VERIFICATION</h1></div>
        <div>
            <p>
                This is to testify that this certificate was issued to
            </p>
                <table>
                    <thead>
                        <tr>
                            <th>Training No</th>
                            <th>Name</th>
                            <th>Certified on</th>
                            <th>Verified</th>

                        </tr>


                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            {{ $trainee->trainingId }}
                        </td>
                        <td>
                            {{ $trainee->name }}
                        </td>
                        <td>
                            {{ $trainee->interest }}
                        </td>
                        <td>
                            <img src="{{ asset('storage/img/verified.png') }}" class="p-2 w-12"/>
                        </td>
                        </tr>


                    </tbody>

                </table>

        <x-primary-button name="Home" class="bg-green-600"/>
        </div>
</div>
