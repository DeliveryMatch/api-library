<?php

namespace DeliveryMatchApiLibrary;

use DateTime;
use DeliveryMatchApiLibrary\dto\requests\GetDesignRequest;
use DeliveryMatchApiLibrary\dto\requests\getLabelRequest;
use DeliveryMatchApiLibrary\dto\requests\GetLocationsRequest;
use DeliveryMatchApiLibrary\dto\requests\GetServicesRequest;
use DeliveryMatchApiLibrary\dto\requests\GetShipmentRequest;
use DeliveryMatchApiLibrary\dto\requests\GetShipmentsRequest;
use DeliveryMatchApiLibrary\dto\requests\GetUserActivityRequest;
use DeliveryMatchApiLibrary\dto\requests\InsertShipmentRequest;
use DeliveryMatchApiLibrary\dto\requests\InsertShipmentsRequest;
use DeliveryMatchApiLibrary\dto\requests\UpdateShipmentRequest;
use DeliveryMatchApiLibrary\dto\requests\UpdateShipmentMethodRequest;
use DeliveryMatchApiLibrary\dto\responses\GetDesignResponse;
use DeliveryMatchApiLibrary\dto\responses\GetLabelResponse;
use DeliveryMatchApiLibrary\dto\responses\GetLocationsResponse;
use DeliveryMatchApiLibrary\dto\responses\GetServicesResponse;
use DeliveryMatchApiLibrary\dto\responses\GetShipmentResponse;
use DeliveryMatchApiLibrary\dto\responses\GetShipmentsResponse;
use DeliveryMatchApiLibrary\dto\responses\GetUserActivityResponse;
use DeliveryMatchApiLibrary\dto\responses\InsertShipmentBookResponse;
use DeliveryMatchApiLibrary\dto\responses\InsertShipmentPrintResponse;
use DeliveryMatchApiLibrary\dto\responses\InsertShipmentSaveResponse;
use DeliveryMatchApiLibrary\dto\responses\InsertShipmentShowSelectReturnmailCheapestResponse;
use DeliveryMatchApiLibrary\dto\responses\InsertShipmentsResponse;
use DeliveryMatchApiLibrary\dto\responses\UpdateShipmentMethodResponse;
use DeliveryMatchApiLibrary\dto\responses\UpdateShipmentResponse;
use DeliveryMatchApiLibrary\exceptions\DeliveryMatchException;
use DeliveryMatchApiLibrary\exceptions\InvalidDeliveryMatchLinkException;
use Exception;
use function PHPUnit\Framework\isEmpty;

class DeliveryMatchClient
{
    private string $clientId;
    private string $apiKey;
    private string $url;

    /**
     * @param string $clientId
     * @param string $apiKey
     * @param string $url
     */
    public function __construct(string $clientId, string $apiKey, string $url)
    {
        $this->clientId = $clientId;
        $this->apiKey = $apiKey;
        $this->url = $url;
    }

    /**
     * @param string $method
     * @param $data
     *
     * @return mixed
     * @throws DeliveryMatchException
     */
    public function sendRequest(string $method, $data) {
        return $this->connectApi($method, $data);
    }

    /**
     * @param InsertShipmentRequest $insertShipmentRequest
     * @return InsertShipmentShowSelectReturnmailCheapestResponse|InsertShipmentBookResponse|InsertShipmentSaveResponse|InsertShipmentPrintResponse
     * @throws DeliveryMatchException
     */
    public function insertShipment(InsertShipmentRequest $insertShipmentRequest)
    {
        return $this->connectApi("insertShipment", $insertShipmentRequest);
    }

    /**
     * @param InsertShipmentsRequest $insertShipmentsRequest
     * @return InsertShipmentsResponse
     * @throws DeliveryMatchException
     */
    public function insertShipments(InsertShipmentsRequest $insertShipmentsRequest): InsertShipmentsResponse
    {
        return $this->connectApi("insertShipments", $insertShipmentsRequest);
    }

    /**
     * @param UpdateShipmentRequest $updateShipmentRequest
     * @return UpdateShipmentResponse
     * @throws DeliveryMatchException
     */
    public function updateShipment(UpdateShipmentRequest $updateShipmentRequest): UpdateShipmentResponse
    {
        return $this->connectApi("updateShipment", $updateShipmentRequest);
    }

    /**
     * @param UpdateShipmentMethodRequest $UpdateShipmentMethodRequest
     * @return UpdateShipmentMethodResponse
     * @throws DeliveryMatchException
     */
    public function updateShipmentMethod(UpdateShipmentMethodRequest $UpdateShipmentMethodRequest): UpdateShipmentMethodResponse
    {
        return $this->connectApi("updateShipmentMethod", $UpdateShipmentMethodRequest);
    }

    /**
     * @param GetShipmentRequest $getShipmentRequest
     * @return getShipmentResponse
     * @throws DeliveryMatchException
     */
    public function getShipment(getShipmentRequest $getShipmentRequest)
    {
        return $this->connectApi("getShipment", $getShipmentRequest);
    }

    /**
     * @param GetShipmentsRequest $getShipmentsRequest
     * @return GetShipmentsResponse
     * @throws DeliveryMatchException
     */
    public function getShipments(getShipmentsRequest $getShipmentsRequest): GetShipmentsResponse
    {
        return $this->stringToDateTime($this->connectApi("getShipments", $getShipmentsRequest));
    }

    /**
     * @param GetLocationsRequest $getLocationsRequest
     * @return GetLocationsResponse
     * @throws DeliveryMatchException
     */
    public function getLocations(GetLocationsRequest $getLocationsRequest): GetLocationsResponse
    {
        return $this->connectApi("getLocations", $getLocationsRequest);
    }

    /**
     * @param GetServicesRequest $getServicesRequest
     * @return GetServicesResponse
     * @throws DeliveryMatchException
     */
    public function getServices(GetServicesRequest $getServicesRequest): GetServicesResponse
    {
        return $this->connectApi("getServices", $getServicesRequest);
    }

    /**
     * @param GetLabelRequest $getLabelRequest
     * @return GetLabelResponse
     * @throws DeliveryMatchException
     */
    public function getLabel(GetLabelRequest $getLabelRequest): GetLabelResponse
    {
        return $this->connectApi("getLabel", $getLabelRequest);
    }

    /**
     * @param GetUserActivityRequest $getUserActivityRequest
     * @return GetUserActivityResponse
     * @throws DeliveryMatchException
     */
    public function getUserActivity(GetUserActivityRequest $getUserActivityRequest): GetUserActivityResponse
    {
        return $this->connectApi("getUserActivity", $getUserActivityRequest);
    }

    /**
     * @param GetDesignRequest $getDesignRequest
     * @return GetDesignResponse
     * @throws DeliveryMatchException
     */
    public function getDesign(GetDesignRequest $getDesignRequest): GetDesignResponse
    {
        return $this->connectApi("getDesign", $getDesignRequest);
    }

    public function stringToDateTime($result) {
        // stdClass converting to array
        $result = json_decode(json_encode($result), true);
        foreach($result as $key => &$value)
        {
            if (!is_array($value))
            {
                if(strpos($key, 'date')) {
                    $value = DateTime::createFromFormat("Y-m-d", $value);
                }
                if(strpos($key, 'time')) {
                    $value = DateTime::createFromFormat("H:i", $value);
                }

            } else {
                $this->stringToDateTime($value);
            }
        }

        return $result;
    }

    /**
     * @param string $method
     *
     * @param $data
     * @return mixed|string
     *
     * @throws DeliveryMatchException
     * @throws Exception
     */
    private function connectApi(string $method,  $data)
    {

        $ch = curl_init();
        $url = "$this->url/$method";

        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_FAILONERROR => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => ['Content-Type: application/json', "client: $this->clientId", "apikey: $this->apiKey"],
        ));

        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if (!$response) {
            throw new Exception(curl_error($ch), curl_errno($ch));
        }

        print_r($response);

        $result = json_decode($response);

        if((isset($result->status) && strpos($result->status, "booked")) || strpos($method, "insertShipment") || (($method == "getShipment" || $method == "getShipments") && (!isset($result->status) || $result->status != "failure")) || (isset($result->shipments) && !isEmpty($result->shipments)) || isset($result->services) || isset($result->labelURL)) {
            $result->code = $http_code;
            $result->status = "success";
            return $result;
        }

        if (isset($result->status) && $result->status !== "success") {
            throw new DeliveryMatchException($result->message, $result->code, $result->status);
        }

        if ($method == "getShipments" && isset($result->status) && $result->status == NULL) {
            throw new DeliveryMatchException("Shipment could not be stored", 8, "failure");
        }

        if (!isset($result) && (!isset($result->code) || $http_code !== "200")) {
            throw new InvalidDeliveryMatchLinkException($this->url);
        }

        curl_close($ch);

        return $result;
    }
}