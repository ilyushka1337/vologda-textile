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
    class MediaErrorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\MediaErrors::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\MediaErrors::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\MediaErrors();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('additionalErrors', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['additionalErrors'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setAdditionalErrors($values);
                unset($data['additionalErrors']);
            }
            if (\array_key_exists('data', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['data'] as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $object->setData($values_1);
                unset($data['data']);
            }
            if (\array_key_exists('error', $data)) {
                $object->setError($data['error']);
                unset($data['error']);
            }
            if (\array_key_exists('errorText', $data)) {
                $object->setErrorText($data['errorText']);
                unset($data['errorText']);
            }
            foreach ($data as $key_2 => $value_2) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $object[$key_2] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('additionalErrors') && null !== $object->getAdditionalErrors()) {
                $values = [];
                foreach ($object->getAdditionalErrors() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['additionalErrors'] = $values;
            }
            if ($object->isInitialized('data') && null !== $object->getData()) {
                $values_1 = [];
                foreach ($object->getData() as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $data['data'] = $values_1;
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $object->getError();
            }
            if ($object->isInitialized('errorText') && null !== $object->getErrorText()) {
                $data['errorText'] = $object->getErrorText();
            }
            foreach ($object as $key_2 => $value_2) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $data[$key_2] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\MediaErrors::class => false];
        }
    }
} else {
    class MediaErrorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\MediaErrors::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\MediaErrors::class;
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
            $object = new \Placestart\WildberriesApi\Model\MediaErrors();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('additionalErrors', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['additionalErrors'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setAdditionalErrors($values);
                unset($data['additionalErrors']);
            }
            if (\array_key_exists('data', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['data'] as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $object->setData($values_1);
                unset($data['data']);
            }
            if (\array_key_exists('error', $data)) {
                $object->setError($data['error']);
                unset($data['error']);
            }
            if (\array_key_exists('errorText', $data)) {
                $object->setErrorText($data['errorText']);
                unset($data['errorText']);
            }
            foreach ($data as $key_2 => $value_2) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $object[$key_2] = $value_2;
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
            if ($object->isInitialized('additionalErrors') && null !== $object->getAdditionalErrors()) {
                $values = [];
                foreach ($object->getAdditionalErrors() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['additionalErrors'] = $values;
            }
            if ($object->isInitialized('data') && null !== $object->getData()) {
                $values_1 = [];
                foreach ($object->getData() as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $data['data'] = $values_1;
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $object->getError();
            }
            if ($object->isInitialized('errorText') && null !== $object->getErrorText()) {
                $data['errorText'] = $object->getErrorText();
            }
            foreach ($object as $key_2 => $value_2) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $data[$key_2] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\MediaErrors::class => false];
        }
    }
}