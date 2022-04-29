<?php

namespace DeliveryMatchApiLibrary;

use DeliveryMatchApiLibrary\dto\requests\getLabelRequest;
use DeliveryMatchApiLibrary\dto\requests\GetLocationsRequest;
use DeliveryMatchApiLibrary\dto\requests\GetServicesRequest;
use DeliveryMatchApiLibrary\dto\requests\GetShipmentRequest;
use DeliveryMatchApiLibrary\dto\requests\GetShipmentsRequest;
use DeliveryMatchApiLibrary\dto\requests\InsertShipmentRequest;
use DeliveryMatchApiLibrary\dto\requests\InsertShipmentsRequest;
use DeliveryMatchApiLibrary\dto\requests\UpdateShipmentRequest;
use DeliveryMatchApiLibrary\dto\requests\UpdateShipmentsRequest;
use DeliveryMatchApiLibrary\exceptions\DeliveryMatchException;
use DeliveryMatchApiLibrary\exceptions\InvalidDeliveryMatchLinkException;
use Exception;

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
     * @return mixed|string
     * @throws DeliveryMatchException
     */
    public function insertShipment(InsertShipmentRequest $insertShipmentRequest) {
        return $this->connectApi("insertShipment", $insertShipmentRequest);
    }

    /**
     * @param InsertShipmentsRequest $insertShipmentsRequest
     * @return mixed|string
     * @throws DeliveryMatchException
     */
    public function insertShipments(InsertShipmentsRequest $insertShipmentsRequest)
    {
        return $this->connectApi("insertShipments", $insertShipmentsRequest);
    }

    /**
     * @param UpdateShipmentRequest $updateShipmentRequest
     * @return mixed|string
     * @throws DeliveryMatchException
     */
    public function updateShipment(UpdateShipmentRequest $updateShipmentRequest)
    {
        return $this->connectApi("updateShipment", $updateShipmentRequest);
    }

    /**
     * @param UpdateShipmentsRequest $updateShipmentsRequest
     * @return mixed|string
     * @throws DeliveryMatchException
     */
    public function updateShipments(UpdateShipmentsRequest $updateShipmentsRequest)
    {
        return $this->connectApi("updateShipments", $updateShipmentsRequest);
    }

    /**
     * @param GetShipmentRequest $getShipmentRequest
     * @return mixed|string
     * @throws DeliveryMatchException
     */
    public function getShipment(getShipmentRequest $getShipmentRequest)
    {
        return $this->connectApi("getShipment", $getShipmentRequest);
    }

    /**
     * @param GetShipmentsRequest $getShipmentsRequest
     * @return mixed|string
     * @throws DeliveryMatchException
     */
    public function getShipments(getShipmentsRequest $getShipmentsRequest)
    {
        return $this->connectApi("getShipments", $getShipmentsRequest);
    }

    /**
     * @param GetLocationsRequest $getLocationsRequest
     * @return mixed|string
     * @throws DeliveryMatchException
     */
    public function getLocations(GetLocationsRequest $getLocationsRequest)
    {
        return $this->connectApi("getLocations", $getLocationsRequest);
    }

    /**
     * @param GetServicesRequest $getServicesRequest
     * @return mixed|string
     * @throws DeliveryMatchException
     */
    public function getServices(GetServicesRequest $getServicesRequest)
    {
        return $this->connectApi("getServices", $getServicesRequest);
    }

    /**
     * @param GetLabelRequest $getLabelRequest
     * @return mixed|string
     * @throws DeliveryMatchException
     */
    public function getLabel(GetLabelRequest $getLabelRequest) {
        return $this->connectApi("getLabel", $getLabelRequest);
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

        $result = json_decode($response);

//        if(!isset($result->status) && $http_code == "200") {
//            $result->code = $http_code;
//            $result->status = "success";
//        }

        if (isset($result->status) && $result->status !== "success") {
            throw new DeliveryMatchException($result->message, $result->code, $result->status);
        }

        if (!isset($result) && (!isset($result->code) || $http_code !== "200")) {
            throw new InvalidDeliveryMatchLinkException($this->url);
        }

        curl_close($ch);

        return $result;
    }
}