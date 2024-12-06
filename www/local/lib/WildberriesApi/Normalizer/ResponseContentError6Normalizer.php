<?php

namespace Placestart\WildberriesApi\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Placestart\WildberriesApi\Runtime\Normalizer\CheckArray;
use Placestart\WildberriesApi\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ResponseContentError6Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ResponseContentError6::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ResponseContentError6::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\ResponseContentError6();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('data', $data) && $data['data'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['data'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setData($values);
                unset($data['data']);
            }
            elseif (\array_key_exists('data', $data) && $data['data'] === null) {
                $object->setData(null);
            }
            if (\array_key_exists('error', $data)) {
                $object->setError($data['error']);
                unset($data['error']);
            }
            if (\array_key_exists('errorText', $data)) {
                $object->setErrorText($data['errorText']);
                unset($data['errorText']);
            }
            if (\array_key_exists('additionalErrors', $data) && $data['additionalErrors'] !== null) {
                $object->setAdditionalErrors($data['additionalErrors']);
                unset($data['additionalErrors']);
            }
            elseif (\array_key_exists('additionalErrors', $data) && $data['additionalErrors'] === null) {
                $object->setAdditionalErrors(null);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('data') && null !== $object->getData()) {
                $values = [];
                foreach ($object->getData() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['data'] = $values;
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $object->getError();
            }
            if ($object->isInitialized('errorText') && null !== $object->getErrorText()) {
                $data['errorText'] = $object->getErrorText();
            }
            if ($object->isInitialized('additionalErrors') && null !== $object->getAdditionalErrors()) {
                $data['additionalErrors'] = $object->getAdditionalErrors();
            }
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ResponseContentError6::class => false];
        }
    }
} else {
    class ResponseContentError6Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ResponseContentError6::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ResponseContentError6::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\ResponseContentError6();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('data', $data) && $data['data'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['data'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setData($values);
                unset($data['data']);
            }
            elseif (\array_key_exists('data', $data) && $data['data'] === null) {
                $object->setData(null);
            }
            if (\array_key_exists('error', $data)) {
                $object->setError($data['error']);
                unset($data['error']);
            }
            if (\array_key_exists('errorText', $data)) {
                $object->setErrorText($data['errorText']);
                unset($data['errorText']);
            }
            if (\array_key_exists('additionalErrors', $data) && $data['additionalErrors'] !== null) {
                $object->setAdditionalErrors($data['additionalErrors']);
                unset($data['additionalErrors']);
            }
            elseif (\array_key_exists('additionalErrors', $data) && $data['additionalErrors'] === null) {
                $object->setAdditionalErrors(null);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('data') && null !== $object->getData()) {
                $values = [];
                foreach ($object->getData() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['data'] = $values;
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $object->getError();
            }
            if ($object->isInitialized('errorText') && null !== $object->getErrorText()) {
                $data['errorText'] = $object->getErrorText();
            }
            if ($object->isInitialized('additionalErrors') && null !== $object->getAdditionalErrors()) {
                $data['additionalErrors'] = $object->getAdditionalErrors();
            }
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ResponseContentError6::class => false];
        }
    }
}