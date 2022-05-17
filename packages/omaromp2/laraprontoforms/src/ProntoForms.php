<?php

namespace omaromp2\laraprontoforms;

use Illuminate\Support\Facades\Http;

class ProntoForms
{
    // Build your next great package...
    public static function sendform(array $questions=[], ?string $formId = null, ?string $userId = null)
    {
        # snd the event to the event to Prontoforms.

        // Sacamos el Form ID
        $formId = (!$formId) ? env('PRONTO_FORM_ID') : $formId;
        $userId = (!$userId) ? env('PRONTO_USER_ID') : $userId;

        $prontoData = collect();
        foreach ($questions as $key => $value) {
            // Pasamos los valores del Formulario a una colección
            $prontoData->push([
                "label" => $key,
                "answer" => $value
            ]);
        }

        $prontoFile = [
            'formId' => $formId,
            'userId' => $userId,
            'data' => $prontoData
        ];


        // Snd the evento to Prontoforms
        try {
            //Request a ProntoForms...

            $response = Http::withBasicAuth(env('PRONTO_USER'), env('PRONTO_PASS'))
            ->post('https://api.prontoforms.com/api/1.1/data/dispatch.json', $prontoFile);

            // Get teh body of the response
            $res = $response->getBody();
            // Decode the body of the response
            $res = json_decode($res, true);
            return $res;

        } catch (\Throwable $th) {
            // Log in case of error.
            info($th->getMessage());

            return $th->getMessage();
        }




    }
}
