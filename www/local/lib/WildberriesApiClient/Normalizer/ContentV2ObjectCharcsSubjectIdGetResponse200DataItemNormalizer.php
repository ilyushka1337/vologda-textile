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
    class ContentV2ObjectCharcsSubjectIdGetResponse200DataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2ObjectCharcsSubjectIdGetResponse200DataItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2ObjectCharcsSubjectIdGetResponse200DataItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\ContentV2ObjectCharcsSubjectIdGetResponse200DataItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('charcID', $data)) {
                $object->setCharcID($data['charcID']);
                unset($data['charcID']);
            }
            if (\array_key_exists('subjectName', $data)) {
                $object->setSubjectName($data['subjectName']);
                unset($data['subjectName']);
            }
            if (\array_key_exists('subjectID', $data)) {
                $object->setSubjectID($data['subjectID']);
                unset($data['subjectID']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('required', $data)) {
                $object->setRequired($data['required']);
                unset($data['required']);
            }
            if (\array_key_exists('unitName', $data)) {
                $object->setUnitName($data['unitName']);
                unset($data['unitName']);
            }
            if (\array_key_exists('maxCount', $data)) {
                $object->setMaxCount($data['maxCount']);
                unset($data['maxCount']);
            }
            if (\array_key_exists('popular', $data)) {
                $object->setPopular($data['popular']);
                unset($data['popular']);
            }
            if (\array_key_exists('charcType', $data)) {
                $object->setCharcType($data['charcType']);
                unset($data['charcType']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('charcID') && null !== $object->getCharcID()) {
                $data['charcID'] = $object->getCharcID();
            }
            if ($object->isInitialized('subjectName') && null !== $object->getSubjectName()) {
                $data['subjectName'] = $object->getSubjectName();
            }
            if ($object->isInitialized('subjectID') && null !== $object->getSubjectID()) {
                $data['subjectID'] = $object->getSubjectID();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('required') && null !== $object->getRequired()) {
                $data['required'] = $object->getRequired();
            }
            if ($object->isInitialized('unitName') && null !== $object->getUnitName()) {
                $data['unitName'] = $object->getUnitName();
            }
            if ($object->isInitialized('maxCount') && null !== $object->getMaxCount()) {
                $data['maxCount'] = $object->getMaxCount();
            }
            if ($object->isInitialized('popular') && null !== $object->getPopular()) {
                $data['popular'] = $object->getPopular();
            }
            if ($object->isInitialized('charcType') && null !== $object->getCharcType()) {
                $data['charcType'] = $object->getCharcType();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ContentV2ObjectCharcsSubjectIdGetResponse200DataItem::class => false];
        }
    }
} else {
    class ContentV2ObjectCharcsSubjectIdGetResponse200DataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2ObjectCharcsSubjectIdGetResponse200DataItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2ObjectCharcsSubjectIdGetResponse200DataItem::class;
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
            $object = new \Placestart\WildberriesApi\Model\ContentV2ObjectCharcsSubjectIdGetResponse200DataItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('charcID', $data)) {
                $object->setCharcID($data['charcID']);
                unset($data['charcID']);
            }
            if (\array_key_exists('subjectName', $data)) {
                $object->setSubjectName($data['subjectName']);
                unset($data['subjectName']);
            }
            if (\array_key_exists('subjectID', $data)) {
                $object->setSubjectID($data['subjectID']);
                unset($data['subjectID']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('required', $data)) {
                $object->setRequired($data['required']);
                unset($data['required']);
            }
            if (\array_key_exists('unitName', $data)) {
                $object->setUnitName($data['unitName']);
                unset($data['unitName']);
            }
            if (\array_key_exists('maxCount', $data)) {
                $object->setMaxCount($data['maxCount']);
                unset($data['maxCount']);
            }
            if (\array_key_exists('popular', $data)) {
                $object->setPopular($data['popular']);
                unset($data['popular']);
            }
            if (\array_key_exists('charcType', $data)) {
                $object->setCharcType($data['charcType']);
                unset($data['charcType']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('charcID') && null !== $object->getCharcID()) {
                $data['charcID'] = $object->getCharcID();
            }
            if ($object->isInitialized('subjectName') && null !== $object->getSubjectName()) {
                $data['subjectName'] = $object->getSubjectName();
            }
            if ($object->isInitialized('subjectID') && null !== $object->getSubjectID()) {
                $data['subjectID'] = $object->getSubjectID();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('required') && null !== $object->getRequired()) {
                $data['required'] = $object->getRequired();
            }
            if ($object->isInitialized('unitName') && null !== $object->getUnitName()) {
                $data['unitName'] = $object->getUnitName();
            }
            if ($object->isInitialized('maxCount') && null !== $object->getMaxCount()) {
                $data['maxCount'] = $object->getMaxCount();
            }
            if ($object->isInitialized('popular') && null !== $object->getPopular()) {
                $data['popular'] = $object->getPopular();
            }
            if ($object->isInitialized('charcType') && null !== $object->getCharcType()) {
                $data['charcType'] = $object->getCharcType();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ContentV2ObjectCharcsSubjectIdGetResponse200DataItem::class => false];
        }
    }
}