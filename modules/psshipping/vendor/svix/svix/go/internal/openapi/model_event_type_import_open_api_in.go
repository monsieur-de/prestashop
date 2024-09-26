/*
 * Svix API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * API version: 1.1.1
 */

// Code generated by OpenAPI Generator (https://openapi-generator.tech); DO NOT EDIT.

package openapi

import (
	"encoding/json"
)

// EventTypeImportOpenApiIn Import a list of event types from webhooks defined in an OpenAPI spec.  The OpenAPI spec can be specified as either `spec` given the spec as a JSON object, or as `specRaw` (a `string`) which will be parsed as YAML or JSON by the server. Sending neither or both is invalid, resulting in a `400` **Bad Request**.
type EventTypeImportOpenApiIn struct {
	// A pre-parsed JSON spec.
	Spec map[string]map[string]interface{} `json:"spec,omitempty"`
	// A string, parsed by the server as YAML or JSON.
	SpecRaw NullableString `json:"specRaw,omitempty"`
}

// NewEventTypeImportOpenApiIn instantiates a new EventTypeImportOpenApiIn object
// This constructor will assign default values to properties that have it defined,
// and makes sure properties required by API are set, but the set of arguments
// will change when the set of required properties is changed
func NewEventTypeImportOpenApiIn() *EventTypeImportOpenApiIn {
	this := EventTypeImportOpenApiIn{}
	return &this
}

// NewEventTypeImportOpenApiInWithDefaults instantiates a new EventTypeImportOpenApiIn object
// This constructor will only assign default values to properties that have it defined,
// but it doesn't guarantee that properties required by API are set
func NewEventTypeImportOpenApiInWithDefaults() *EventTypeImportOpenApiIn {
	this := EventTypeImportOpenApiIn{}
	return &this
}

// GetSpec returns the Spec field value if set, zero value otherwise (both if not set or set to explicit null).
func (o *EventTypeImportOpenApiIn) GetSpec() map[string]map[string]interface{} {
	if o == nil  {
		var ret map[string]map[string]interface{}
		return ret
	}
	return o.Spec
}

// GetSpecOk returns a tuple with the Spec field value if set, nil otherwise
// and a boolean to check if the value has been set.
// NOTE: If the value is an explicit nil, `nil, true` will be returned
func (o *EventTypeImportOpenApiIn) GetSpecOk() (*map[string]map[string]interface{}, bool) {
	if o == nil || o.Spec == nil {
		return nil, false
	}
	return &o.Spec, true
}

// HasSpec returns a boolean if a field has been set.
func (o *EventTypeImportOpenApiIn) HasSpec() bool {
	if o != nil && o.Spec != nil {
		return true
	}

	return false
}

// SetSpec gets a reference to the given map[string]map[string]interface{} and assigns it to the Spec field.
func (o *EventTypeImportOpenApiIn) SetSpec(v map[string]map[string]interface{}) {
	o.Spec = v
}

// GetSpecRaw returns the SpecRaw field value if set, zero value otherwise (both if not set or set to explicit null).
func (o *EventTypeImportOpenApiIn) GetSpecRaw() string {
	if o == nil || o.SpecRaw.Get() == nil {
		var ret string
		return ret
	}
	return *o.SpecRaw.Get()
}

// GetSpecRawOk returns a tuple with the SpecRaw field value if set, nil otherwise
// and a boolean to check if the value has been set.
// NOTE: If the value is an explicit nil, `nil, true` will be returned
func (o *EventTypeImportOpenApiIn) GetSpecRawOk() (*string, bool) {
	if o == nil  {
		return nil, false
	}
	return o.SpecRaw.Get(), o.SpecRaw.IsSet()
}

// HasSpecRaw returns a boolean if a field has been set.
func (o *EventTypeImportOpenApiIn) HasSpecRaw() bool {
	if o != nil && o.SpecRaw.IsSet() {
		return true
	}

	return false
}

// SetSpecRaw gets a reference to the given NullableString and assigns it to the SpecRaw field.
func (o *EventTypeImportOpenApiIn) SetSpecRaw(v string) {
	o.SpecRaw.Set(&v)
}
// SetSpecRawNil sets the value for SpecRaw to be an explicit nil
func (o *EventTypeImportOpenApiIn) SetSpecRawNil() {
	o.SpecRaw.Set(nil)
}

// UnsetSpecRaw ensures that no value is present for SpecRaw, not even an explicit nil
func (o *EventTypeImportOpenApiIn) UnsetSpecRaw() {
	o.SpecRaw.Unset()
}

func (o EventTypeImportOpenApiIn) MarshalJSON() ([]byte, error) {
	toSerialize := map[string]interface{}{}
	if o.Spec != nil {
		toSerialize["spec"] = o.Spec
	}
	if o.SpecRaw.IsSet() {
		toSerialize["specRaw"] = o.SpecRaw.Get()
	}
	return json.Marshal(toSerialize)
}

type NullableEventTypeImportOpenApiIn struct {
	value *EventTypeImportOpenApiIn
	isSet bool
}

func (v NullableEventTypeImportOpenApiIn) Get() *EventTypeImportOpenApiIn {
	return v.value
}

func (v *NullableEventTypeImportOpenApiIn) Set(val *EventTypeImportOpenApiIn) {
	v.value = val
	v.isSet = true
}

func (v NullableEventTypeImportOpenApiIn) IsSet() bool {
	return v.isSet
}

func (v *NullableEventTypeImportOpenApiIn) Unset() {
	v.value = nil
	v.isSet = false
}

func NewNullableEventTypeImportOpenApiIn(val *EventTypeImportOpenApiIn) *NullableEventTypeImportOpenApiIn {
	return &NullableEventTypeImportOpenApiIn{value: val, isSet: true}
}

func (v NullableEventTypeImportOpenApiIn) MarshalJSON() ([]byte, error) {
	return json.Marshal(v.value)
}

func (v *NullableEventTypeImportOpenApiIn) UnmarshalJSON(src []byte) error {
	v.isSet = true
	return json.Unmarshal(src, &v.value)
}


