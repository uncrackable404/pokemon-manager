<?php

namespace App\Request;

use DigitalRevolution\SymfonyRequestValidation\AbstractValidatedRequest;
use DigitalRevolution\SymfonyRequestValidation\Renderer\ViolationListRenderer;
use DigitalRevolution\SymfonyRequestValidation\ValidationRules;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\ConstraintViolationListInterface;

class TeamRequest extends AbstractValidatedRequest
{
    protected function getValidationRules(): ValidationRules
    {
        return new ValidationRules([
            'request' => [
                'name' => 'required|string|between:1,10'
            ]
        ]);
    }

    protected function handleViolations(ConstraintViolationListInterface $violationList): ?Response
    {
        $messages = ['message' => 'validation_failed', 'errors' => []];

        foreach ($violationList as $message) {
            $messages['errors'][] = [
                'property' => $message->getPropertyPath(),
                'value' => $message->getInvalidValue(),
                'message' => $message->getMessage(),
            ];
        }

        if (count($messages['errors']) > 0) {
            $response = new JsonResponse($messages, 400, [
                'Access-Control-Allow-Origin' => '*'
            ]);
            $response->send();

            exit;
        }
    }
}
